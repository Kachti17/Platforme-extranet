<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\LogoutController;

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
    Route::post('/creerEvent', [EvenementController::class, 'createEvent']);

});


Route::post('/register', [RegisteredUserController::class, 'createUser']);
Route::post('/makePassword', [RegisteredUserController::class, 'makePassword']);//edheya ki tsir el creation d un user w bech ya3mel password

Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LogoutController::class, 'logout']);

Route::delete('/DeleteUser/{id}', [UserController::class, 'deleteUser']);


Route::get('/users/{id}', [UserController::class, 'showUserById']);
Route::get('/users', [UserController::class, 'showAllUsers']);

Route::get('/users/filter-by-name/{name}', [UserController::class, 'filterByName']);
Route::get('/users/filter-by-role/{role}', [UserController::class, 'filterByRole']);

Route::delete('/DeleteEvent/{id}', [EvenementController::class, 'deleteEvent']);
Route::post('/UpdateEvent/{id}', [EvenementController::class, 'updateEvent']);
Route::get('/events', [EvenementController::class, 'showEvents']);
Route::post('/SearchEvent/byData', [EvenementController::class, 'searchEvent']);
Route::get('/events/data', [EvenementController::class, 'listEvent']);