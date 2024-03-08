<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Str;
use App\Mail\MailNotify;
use Illuminate\Support\Facades\Validator;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function creer(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function createUser(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:'.User::class,
            'password' => 'required|string|min:6', // Le mot de passe est requis et doit avoir au moins 6 caractères
            'tel' => 'nullable|string|max:20',
        ]);


        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            //'password' => $request->password,
            'tel' => $request->tel,
        ]);

        // Send email
        Mail::to($user->email)->send(new MailNotify($user));

        event(new Registered($user));

        Auth::login($user);

        return response()->json(['message' => 'User account created successfully'], 201);
    }


    public function makePassword(Request $request)
    {
        // Validation des données
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'new_password' => 'required|string', // Validation du nouveau mot de passe
        ]);

        // Si la validation échoue, retourne une réponse avec l'erreur
        if ($validator->fails()) {
            return response()->json(['error' => 'Les données entrées sont invalides.'], 400);
        }

        $email = $request->input('email');
        $newPassword = $request->input('new_password');

        // Réinitialisation du mot de passe sans confirmation
        if ($this->resetPasswordWithoutConfirmation($email, $newPassword)) {
            return response()->json(['message' => 'Mot de passe réinitialisé avec succès.'], 200);
        }

        // Si l'email n'est pas trouvé, retourne une erreur
        return response()->json(['error' => 'Adresse e-mail invalide.'], 404);
    }

    /**
     * Réinitialise le mot de passe sans confirmation.
     *
     * @param  string  $email
     * @param  string  $newPassword
     * @return bool
     */
    private function resetPasswordWithoutConfirmation($email, $newPassword)
    {
        $user = User::where('email', $email)->first();

        if ($user) {
            // Met à jour le mot de passe de l'utilisateur avec le nouveau mot de passe
            $user->password = Hash::make($newPassword);
            $user->save();
            return true;
        }

        return false;
    }



    /*Function to send email with user data
     private function sendUserEmail(User $user)
     {
          Build email content
         $emailContent = "Bonjour " . $user->prenom . " " . $user->nom . ",\n";
         $emailContent .= "Votre compte utilisateur a été créé avec succès.\n";
         $emailContent .= "Voici vos informations :\n";
         $emailContent .= "Nom : " . $user->nom . "\n";
         $emailContent .= "Prénom : " . $user->prenom . "\n";
         $emailContent .= "Email : " . $user->email . "\n";
        // $emailContent .= "Mot de passe : " . $password . "\n";
         $emailContent .= "Telephone : " . $user->tel . "\n";

         // Send email

         // Mail::send($emailContent, function ($message) use ($user) {
          //$message->to($user->email)->subject('Confirmation de création de compte');
         // });
     }*/
}