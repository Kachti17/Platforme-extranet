<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use App\Http\Requests\StoreEvenementRequest;
use App\Http\Requests\UpdateEvenementRequest;
use App\Http\Requests\FormulaireEventRequest;

class EvenementController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function creerEvent(FormulaireEventRequest $request)
    {
        // Validation réussie, créer un nouvel événement
        $evenement = new Evenement();
        $evenement->description = $request->description;
        $evenement->image = $request->image;
        $evenement->date_evenement = $request->date_evenement;
        $evenement->lieu_evenement = $request->lieu_evenement;
        $evenement->source_event = $request->source_event;
        $evenement->nbr_max = $request->nbr_max;
        $evenement->nbr_participants = 0; // Initialiser le nombre de participants à 0

        $evenement->save();

        // Redirection ou réponse appropriée après la création de l'événement
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEvenementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Evenement $evenement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evenement $evenement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEvenementRequest $request, Evenement $evenement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evenement $evenement)
    {
        //
    }
}
