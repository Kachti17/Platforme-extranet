<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VotreController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/users', [UserController::class, 'index']);
});

Route::get('/users/{id}', [UserController::class, 'show']);

Route::post('/register', [RegisteredUserController::class, 'creerUtilisateur']);
Route::post('/makePassword', [RegisteredUserController::class, 'makePassword']);//edheya ki tsir el creation d un user w bech ya3mel password


Route::post('/login', [LoginController::class, 'login']);
Route::delete('/users/{id}', [UserController::class, 'delete']);


Route::get('/users/filter-by-name/{name}', [UserController::class, 'filterByName']);
Route::get('/users/filter-by-role/{role}', [UserController::class, 'filterByRole']);
Route::post('/evenements', [EvenementController::class, 'creerEvent']);
