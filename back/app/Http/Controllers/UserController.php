<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\Publication;
use App\Models\Contenu;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

use App\Mail\ForgotPasswordMail;

use App\Mail\PublicationApprovedMail;
use App\Mail\PublicationRefused;
use App\Mail\PublicationModificationRefused;
use App\Mail\PublicationModificationAcceptedMail;




class UserController extends Controller
{

    public function getUserDetails(Request $request)
    {
        return $request->user(); // Cela renverra les détails de l'utilisateur authentifié
    }

        // Méthode pour créer un utilisateur
        public function createUser(Request $request)
        {
            // Validation des données de la requête
            $request->validate([
                'nom' => 'required|string',
                'prenom' => 'required|string',
                'email' => 'required|string|unique:users',
                'password' => 'required|string',
                'tel' => 'nullable|numeric|digits:8',
                'img_profile' => 'image|mimes:jpeg,png,jpg,gif|max:2048',


                //'role' => 'required|exists:roles,id',
            ]);


            // Création de l'utilisateur
            $user = User::create([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'email' => $request->email,
                'password' => bcrypt($request->password), // Hashage du mot de passe
                'tel' => $request->input('tel'),
                'img_profile' => null,
                //role_id' => $request->input('role'),
            ]);

            return response()->json(['message' => 'Utilisateur créé avec succès!']);
        }

    /**
     * Display a listing of the resource.
     */
    public function showAllUsers()
    {
       $user = User::all();
       return response()->json($user);
    }




    public function showUserById($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nom' => 'sometimes|string|max:255',
            'prenom' => 'sometimes|string|max:255',
            'tel' => 'sometimes|nullable|numeric|digits:8',
        ]);

        // Récupérez l'utilisateur à partir de l'ID
        $user = User::findOrFail($id);

        // Mettez à jour les champs du profil si les données sont valides
        if (isset($validatedData['nom'])) {
            $user->nom = $validatedData['nom'];
        }
        if (isset($validatedData['prenom'])) {
            $user->prenom = $validatedData['prenom'];
        }
        if (isset($validatedData['tel'])) {
            $user->tel = $validatedData['tel'];
        }

        // Sauvegardez les modifications de l'utilisateur
        $user->save();

        // Retournez une réponse JSON avec un message de succès
        return response()->json($user);
    }


    public function filterByName(Request $request)
{
    $keyword = $request->input('keyword');

    $users = User::where('nom', 'like', '%' . $keyword . '%')
                 ->orWhere('prenom', 'like', '%' . $keyword . '%')
                 ->get();

    if ($users->isEmpty()) {
        return response()->json(['message' => 'Aucun utilisateur trouvé pour le nom/prénom spécifié'], 404);
    }

    return response()->json($users);
}


    public function filterByRole($role)
    {
        $users = User::whereHas('role', function ($query) use ($role) {
            $query->where('nom_role', $role);
        })->get();
        return response()->json($users);
    }

    public function deleteUser($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();
            return response()->json(['message' => 'Utilisateur supprimé avec succès'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erreur lors de la suppression de l\'utilisateur', 'error' => $e->getMessage()], 500);
        }
    }





    public function acceptPublicationRequest(Request $request, $id)
    {
        try {
            $publication = Publication::findOrFail($id);

            $publication->update(['isApproved' => 1]);
             $publication->update(['date_pub' => now()]);

            $user = User::findOrFail($publication->user_id);
            Mail::to($user->email)->send(new PublicationApprovedMail($publication));



            return response()->json(['message' => 'La demande de publication a été approuvée'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erreur lors de l\'approbation de la publication', 'error' => $e->getMessage()], 500);
        }
    }




   // Refuser la demande d'ajout ou de modification d'une publication
public function rejectPublicationRequest(Request $request, $id)
{
    try {
        // Récupérer la publication
        $publication = Publication::findOrFail($id);

        // Récupérer l'identifiant du contenu associé
        $contenuId = $publication->contenu_id;

        Contenu::findOrFail($contenuId)->delete();

        $publication->delete();

        // Envoyer une notification par email à l'utilisateur de la publication
        $user = User::findOrFail($publication->user_id);
        Mail::to($user->email)->send(new PublicationRefused($publication));

        // Envoyer une notification sur la plateforme
        //  $user->notify(new PublicationRejectedNotification($publication));

        return response()->json(['message' => 'La demande de publication a été refusée et supprimée'], 200);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Erreur lors du refus de la publication', 'error' => $e->getMessage()], 500);
    }
}


// Refuser la demande de modification d'une publication
public function rejectModificationRequest(Request $request, $id)
{
    try {
        // Récupérer la publication à modifier
        $publication = Publication::findOrFail($id);

        // Rétablir la publication à son état précédent (avant la modification)
        // Vous devez implémenter cette logique en fonction de votre système

        // Envoyer une notification par email à l'utilisateur de la publication
        $user = User::findOrFail($publication->user_id);
        Mail::to($user->email)->send(new PublicationModificationRefused($publication));

        return response()->json(['message' => 'La demande de modification de publication a été refusée'], 200);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Erreur lors du refus de la demande de modification de publication', 'error' => $e->getMessage()], 500);
    }
}




public function acceptModificationRequest(Request $request, $id)
{
    try {
        // Récupérer la publication à modifier
        $publication = Publication::findOrFail($id);

        // Mettre à jour les attributs de la publication avec les nouvelles données
        $publication->update($request->all());

        // Mettre à jour les contenus associés à cette publication
        $publication->contenu()->update($request->all());

        // Mettre à jour l'attribut isApproved à 1 pour qu'elle soit affichée avec les posts approuvés
        $publication->update(['isApproved' => 1]);

        // Mettre à jour la date de publication à maintenant
        $publication->update(['date_pub' => now()]);

        // Envoyer une notification par email à l'utilisateur de la publication
        $user = User::findOrFail($publication->user_id);
        Mail::to($user->email)->send(new PublicationModificationAcceptedMail($publication));

        // Envoyer une notification sur la plateforme
        // $user->notify(new PublicationModificationAcceptedNotification($publication));

        return response()->json(['message' => 'La demande de modification de la publication a été acceptée'], 200);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Erreur lors de l\'acceptation de la demande de modification', 'error' => $e->getMessage()], 500);
    }
}

public function changerMotDePasse(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'nouveau_mot_de_passe' => 'required|min:8',
            'verification_mot_de_passe' => 'required|same:nouveau_mot_de_passe',
        ]);

        // Vérifie si l'utilisateur existe avec l'email donné
        $utilisateur = User::where('email', $request->email)->first();

        if (!$utilisateur) {
            return response()->json(['message' => 'Aucun utilisateur trouvé avec cet email.'], 404);
        }

        if (!Hash::check($request->mot_de_passe_actuel, $utilisateur->password)) {
            return response()->json(['message' => 'Le mot de passe actuel est incorrect.'], 422);
        }

        $utilisateur->password = Hash::make($request->nouveau_mot_de_passe);
        $utilisateur->save();

        return response()->json(['message' => 'Le mot de passe a été changé avec succès.']);
    }



    public function forgotPassword(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
        ]);

        // Récupérer l'utilisateur connecté en session
        $loggedInUser = auth()->user();

        if ($loggedInUser && $loggedInUser->email === $validatedData['email']) {
            // L'e-mail saisi correspond à l'e-mail de l'utilisateur connecté
            $user = $loggedInUser;
        } else {
            // L'e-mail saisi ne correspond pas à l'utilisateur connecté, recherchez l'utilisateur dans la base de données
            $user = User::where('email', $validatedData['email'])->first();
        }

        if (!$user) {
            return response()->json(['error' => 'Aucun utilisateur trouvé avec cet e-mail.'], 404);
        }

        $randomPassword = Str::random(12);

        while (User::where('password', Hash::make($randomPassword))->exists()) {
            $randomPassword = Str::random(12);
        }

        $user->password = Hash::make($randomPassword);
        $user->save();

        Mail::send(new ForgotPasswordMail($user, $randomPassword), ['password' => $randomPassword], function ($message) use ($user) {
            $message->to($user->email)->subject('Mot de passe temporaire');
        });

        return response()->json(['message' => 'Un mot de passe temporaire a été envoyé à votre adresse e-mail. Veuillez vérifier votre boîte de réception.'], 200);
    }


}