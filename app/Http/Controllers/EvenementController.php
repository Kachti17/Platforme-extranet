<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use App\Http\Requests\StoreEvenementRequest;
use App\Http\Requests\UpdateEvenementRequest;
use App\Http\Requests\FormulaireEventRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class EvenementController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }




    public function createEvent(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'description' => 'required|string',
            'lieu_event' => 'required|string',
            'nbr_max' => 'required|integer',
            'date_event' => 'required|date_format:Y-m-d H:i:s',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation de l'image (si présente)

        ]);

        // Création d'un nouvel événement avec les données validées
        $evenement = new Evenement();
        $evenement->description = $validatedData['description'];
        $evenement->lieu_event = $validatedData['lieu_event'];
        $evenement->nbr_max = $validatedData['nbr_max'];
        $evenement->nbr_participants = 0; // Initialisation du nombre de participants à 0
        $evenement->date_event = $validatedData['date_event']; // Utilisation de la date saisie par l'utilisateur
        $evenement->user_id = Auth::id(); // Récupère automatiquement l'ID de l'utilisateur authentifié

        if ($request->hasFile('image')) {
            // Enregistrement de l'image
            $imagePath = $request->file('image')->store('images/evenements');
            $evenement->image = $imagePath;
        }

        // Sauvegarde de l'événement
        $evenement->save();

        // Réponse JSON pour indiquer que l'événement a été créé avec succès
        return response()->json(['message' => 'Événement créé avec succès.'], 200);
    }




    public function updateEvent(Request $request, $id)
    {
        try {
            $evenement = Evenement::findOrFail($id);

            // Récupération des données envoyées dans la requête
            $requestData = $request->only(['description', 'lieu_event', 'nbr_max', 'date_event', 'image']);

            // Validation des données
            $validatedData = $request->validate([
                'description' => 'string',
                'lieu_event' => 'string',
                'nbr_max' => 'integer',
                'date_event' => 'date_format:Y-m-d H:i:s',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validation de l'image (si présente)
            ]);

            // Mise à jour des champs de l'événement
            foreach ($validatedData as $key => $value) {
                // Vérification si la valeur est fournie dans la requête
                if ($request->filled($key)) {
                    $evenement->$key = $value;
                }
            }

            // Sauvegarde des modifications
            $evenement->save();

            return response()->json(['message' => 'Événement modifié avec succès'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erreur lors de la modification de l\'événement', 'error' => $e->getMessage()], 500);
        }
    }




    private function saveImage($image)
    {
        if ($image->isValid()) {
            // Sauvegarder l'image dans le dossier public/images (exemple)
            $path = $image->store('public/images');

            // Retourner le chemin d'accès relatif
            return str_replace('public/', 'storage/', $path);
        }

        return null;
    }


    public function deleteEvent($id_event)
    {
        try {
            $evenement = Evenement::findOrFail($id_event);
            $evenement->delete();
            return response()->json(['message' => 'Événement supprimé avec succès'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erreur lors de la suppression de l\'événement', 'error' => $e->getMessage()], 500);
        }
    }





public function showEvents()
{
    try {
        // Récupération de tous les événements
        $evenements = Evenement::all();

        // Retourne la liste des événements au format JSON
        return response()->json($evenements, 200);
    } catch (\Exception $e) {
        // En cas d'erreur, retourne un message d'erreur
        return response()->json(['message' => 'Erreur lors de la récupération des événements', 'error' => $e->getMessage()], 500);
    }
}



public function searchEvent(Request $request)
{
    try {
        // Validation des données
        $request->validate([
            'date_event' => 'required|date_format:Y-m-d',
        ]);

        // Récupération de la date à partir de la requête
        $date_event = $request->input('date_event');

        // Recherche des événements correspondant à la date donnée
        $evenements = Evenement::where('date_event', 'LIKE', "$date_event%")->get();

        // Retourne les événements trouvés au format JSON
        return response()->json($evenements, 200);
    } catch (\Exception $e) {
        // En cas d'erreur, retourne un message d'erreur
        return response()->json(['message' => 'Erreur lors de la recherche des événements', 'error' => $e->getMessage()], 500);
    }
}



public function listEvent(Request $request)
{
    try {
        // Récupérer la date actuelle
        $currentDate = now();

        // Récupérer tous les événements à partir de la date actuelle, classés par date
        $events = Evenement::where('date_event', '>=', $currentDate)
                           ->orderBy('date_event', 'asc')
                           ->get();

        // Retourner les événements au format JSON
        return response()->json(['events' => $events], 200);
    } catch (\Exception $e) {
        // En cas d'erreur, renvoyer un message d'erreur
        return response()->json(['message' => 'Erreur lors de la récupération des événements', 'error' => $e->getMessage()], 500);
    }
}
}