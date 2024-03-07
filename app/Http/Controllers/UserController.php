<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
                //'id_role' => $request->input('role'),
            ]);

            // Retournez un message de succès
            return response()->json(['message' => 'Utilisateur créé avec succès!']);
        }

    /**
     * Display a listing of the resource.
     */
    public function index()
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
    public function show($id)
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
     public function delete($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'Utilisateur non trouvé'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'Utilisateur supprimé avec succès'], 200);
    }
}
