<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Handle an incoming login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $validatedUser = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($validatedUser)) {
            // Authentication passed...
            $user = Auth::user();
            $token = $user->createToken('api_token')->plainTextToken;

            return response()->json(["user" => $user , 'token' => $token], 200);
        }

        return response()->json(['login fail' => 'Invalid credentials'], 401);
    }
}