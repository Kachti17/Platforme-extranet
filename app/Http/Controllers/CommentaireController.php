<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Http\Requests\StoreCommentaireRequest;
use App\Http\Requests\UpdateCommentaireRequest;
use Illuminate\Http\Request;
use App\Models\Publication;


class CommentaireController extends Controller
{public function commenterPublication(Request $request, $id)
    {
        try {
            // Récupérer l'utilisateur actuel
            $user = auth()->user();

            // Récupérer la publication spécifiée
            $publication = Publication::findOrFail($id);

            // Validation des données du commentaire
            $validatedData = $request->validate([
                'contenu_comm' => 'required|string|max:255', // Exemple de règle de validation pour le contenu du commentaire
            ]);

            // Création d'un nouveau commentaire
            $commentaire = new Commentaire();
            $commentaire->contenu_comm = $validatedData['contenu_comm'];
            $commentaire->user_id = $user->id;
            $commentaire->pub_id = $publication->id;
            $commentaire->date_comm = now();

            $commentaire->save();

            return response()->json(['message' => 'Commentaire ajouté avec succès'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erreur lors de l\'ajout du commentaire', 'error' => $e->getMessage()], 500);
        }
    }

}
