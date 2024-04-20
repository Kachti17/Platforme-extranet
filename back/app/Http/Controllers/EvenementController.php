<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use App\Http\Requests\StoreEvenementRequest;
use App\Http\Requests\UpdateEvenementRequest;
use App\Http\Requests\FormulaireEventRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use DateTime;

use App\Models\Participant;


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
        try {
            $validatedData = $request->validate([
                'description' => 'required|string',
                'lieu_event' => 'required|string',
                'nbr_max' => 'required|integer',
                'date_event' => 'required|date_format:Y-m-d\TH:i' ,
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $evenement = new Evenement();
            $evenement->description = $validatedData['description'];
            $evenement->lieu_event = $validatedData['lieu_event'];
            $evenement->nbr_max = $validatedData['nbr_max'];
            $evenement->nbr_participants = 1;
            $evenement->date_event = $validatedData['date_event'];
            $evenement->user_id = Auth::id();

            if ($request->hasFile('image')) {
                $imagePath = $this->saveImage($request->file('image'));
                $evenement->image = $imagePath;
            }

            $evenement->save();

            $participant = new Participant();
            $participant->user_id = Auth::id();
            $participant->evenement_id = $evenement->id;
            $participant->inscription_date = now();
            $participant->save();


            return response()->json(['message' => 'Événement créé avec succès.'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erreur lors de la création de l\'événement. Veuillez réessayer.'], 500);
        }
    }

    private function saveImage($image)
    {
        if ($image->isValid()) {
            $path = $image->store('public/images');

            return str_replace('public/', 'storage/', $path);
        }

        return null;
    }



    public function updateEvent(Request $request, $id)
    {
        try {
            $evenement = Evenement::findOrFail($id);

            $requestData = $request->only(['description', 'lieu_event', 'nbr_max', 'date_event', 'image']);

            // Validation des données
            $validatedData = $request->validate([
                'description' => 'string',
                'lieu_event' => 'string',
                'nbr_max' => 'integer',
                'date_event' => 'date_format:Y-m-d\TH:i',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            foreach ($validatedData as $key => $value) {
                if ($request->filled($key)) {
                    $evenement->$key = $value;
                }
            }

            $evenement->save();
            $evenement->participants()->attach(Auth::id());


            return response()->json(['message' => 'Événement modifié avec succès'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erreur lors de la modification de l\'événement', 'error' => $e->getMessage()], 500);
        }
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

public function showEventsById($id)
{
    try {
        // Récupération de l'événement par son ID
        $evenement = Evenement::findOrFail($id);

        // Retourne l'événement au format JSON
        return response()->json($evenement, 200);
    } catch (\Exception $e) {
        // En cas d'erreur, retourne un message d'erreur
        return response()->json(['message' => 'Erreur lors de la récupération de l\'événement', 'error' => $e->getMessage()], 500);
    }
}



public function showTodayEvent(Request $request)
{
    try {
        $todayDate = now()->format('Y-m-d');
        $evenement = Evenement::whereDate('date_event', $todayDate)->first();

        if ($evenement) {
            return response()->json($evenement, 200);
        } else {
            return response()->json(['message' => 'Aucun événement trouvé pour aujourd\'hui'], 404);
        }
    } catch (\Exception $e) {
        return response()->json(['message' => 'Erreur lors de la recherche de l\'événement d\'aujourd\'hui', 'error' => $e->getMessage()], 500);
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
        $evenements = Evenement::whereDate('date_event', $date_event)->get();

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




public function participerEvenement(Request $request, $id)
{
    try {
        // Récupérer l'événement spécifié
        $evenement = Evenement::findOrFail($id);

        // Vérifier si le nombre maximum de participants est atteint
        if ($evenement->nbr_participants >= $evenement->nbr_max) {
            throw new \Exception("Le nombre maximum de participants est atteint pour cet événement.");
        }

        // Récupérer l'utilisateur actuel
        $user = auth()->user();

        // Vérifier si l'utilisateur est déjà inscrit à cet événement
        $existingParticipation = Participant::where('evenement_id', $evenement->id)
            ->where('user_id', $user->id)->exists();
        if ($existingParticipation) {
            throw new \Exception("Vous êtes déjà inscrit à cet événement.");
        }

        // Créer une nouvelle entrée dans la table des participants
        $participant = new Participant();
        $participant->user_id = $user->id;
        $participant->evenement_id = $evenement->id;
        $participant->inscription_date = now(); // Date d'inscription actuelle
        $participant->save();

        // Incrémenter le nombre de participants de l'événement
        $evenement->nbr_participants++;

        // Sauvegarde des modifications de l'événement
        $evenement->save();

        return response()->json(['message' => 'Vous avez participé à l\'événement avec succès'], 200);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Erreur lors de la participation à l\'événement', 'error' => $e->getMessage()], 500);
    }
}

public function annulerParticipation(Request $request, $id)
{
    try {
        // Récupérer l'événement spécifié
        $evenement = Evenement::findOrFail($id);

        // Vérifier si l'utilisateur est inscrit à cet événement
        $user = auth()->user();
        $participation = Participant::where('user_id', $user->id)
            ->where('evenement_id', $evenement->id)
            ->first();

        if (!$participation) {
            throw new \Exception("Vous n'êtes pas inscrit à cet événement.");
        }

        // Calculer la date limite pour annuler la participation (24 heures avant la date de l'événement)
        $dateEvenement = new DateTime($evenement->date_event);
        $dateLimite = $dateEvenement->sub(new \DateInterval('P1D'));
        // Vérifier si la date limite est passée
        $now = new DateTime();
        if ($now >= $dateLimite) {
            throw new \Exception("Vous ne pouvez pas annuler votre participation car la date limite est dépassée.");
        }

        // Supprimer la participation de l'utilisateur à l'événement
        $participation->delete();

        // Décrémenter le nombre de participants dans l'événement
        $evenement->nbr_participants--;

        // Sauvegarder les modifications de l'événement
        $evenement->save();

        return response()->json(['message' => 'Votre participation à l\'événement a été annulée avec succès'], 200);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Erreur lors de l\'annulation de la participation', 'error' => $e->getMessage()], 500);
    }
}

}