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
    public function creerUtilisateur(Request $request)
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
            'tel' => $request->tel,
        ]);

        // Send email with user data
        $this->sendUserEmail($user);

        event(new Registered($user));

        Auth::login($user);

        return response()->json(['message' => 'User account created successfully'], 201);
    }

     // Function to send email with user data
     private function sendUserEmail(User $user)
     {
         // Build email content
         $emailContent = "Bonjour " . $user->prenom . " " . $user->nom . ",\n";
         $emailContent .= "Votre compte utilisateur a été créé avec succès.\n";
         $emailContent .= "Voici vos informations :\n";
         $emailContent .= "Nom : " . $user->nom . "\n";
         $emailContent .= "Prénom : " . $user->prenom . "\n";
         $emailContent .= "Email : " . $user->email . "\n";

         // Send email
         Mail::raw($emailContent, function ($message) use ($user) {
             $message->to($user->email)->subject('Confirmation de création de compte');
         });
     }
}
