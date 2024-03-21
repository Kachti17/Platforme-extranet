<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Publication;
use App\Models\Contenu;


use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use App\Mail\PublicationApprovedMail;
use App\Mail\PublicationRefused;
use App\Mail\PublicationModificationRefused;
use App\Mail\PublicationModificationAcceptedMail;




class UserController extends Controller
{



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
                //'role' => 'required|exists:roles,id',
            ]);

            // Création de l'utilisateur
            $user = User::create([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'email' => $request->email,
                'password' => bcrypt($request->password), // Hashage du mot de passe
                'tel' => $request->input('tel'),
                //'role_id' => $request->input('role'),
            ]);

            // Retournez un message de succès
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function showUserById($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function filterByName($name)
{
    $users = User::where('nom', 'like', '%' . $name . '%')->get();

    if ($users->isEmpty()) {
        return response()->json(['message' => 'Aucun utilisateur trouvé pour le nom spécifié'], 404);
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
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
            // Récupérer la publication à modifier
            $publication = Publication::findOrFail($id);

            // Mettre à jour l'attribut isApproved
            $publication->update(['isApproved' => 1]);
            // Mettre à jour la date de publication
             $publication->update(['date_pub' => now()]);

            // Envoyer une notification par email à l'utilisateur de la publication
            $user = User::findOrFail($publication->user_id);
            Mail::to($user->email)->send(new PublicationApprovedMail($publication));

            // Envoyer une notification sur la plateforme
         //   $user->notify(new PublicationApprovedNotification($publication));

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





}