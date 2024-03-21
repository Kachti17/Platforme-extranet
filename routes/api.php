<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\ContenuController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VotreController;
use App\Models\Publication;
use App\Http\Controllers\CommentaireController;

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
    Route::post('/creerPublication', [PublicationController::class, 'createPublication']);
    Route::put('/modifierPublication/{id}', [PublicationController::class, 'updatePublication'])->name('publications.update');
    Route::delete('/supprimerPublication/{id}', [PublicationController::class, 'deletePublication'])->name('publications.delete');

    Route::post('/publication/accepter/{id}', [UserController::class, 'acceptPublicationRequest']);
    Route::delete('/publication/refuser/{id}', [UserController::class, 'rejectPublicationRequest']);
    Route::post('/publication/{id}/reject-modification', [UserController::class, 'rejectModificationRequest']);
    Route::put('/publications/{id}/accept-modification', [UserController::class, 'acceptModificationRequest']);

    Route::post('/evenements/{id}/participer', [EvenementController::class, 'participerEvenement']);
    Route::post('/evenements/{id}/annuler-participation', [EvenementController::class, 'annulerParticipation']);

    Route::post('/commenter/{publication_id}', [CommentaireController::class ,'commenterPublication']);





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


Route::post('/creerContenu', [ContenuController::class, 'createContenu']);

Route::get('/publicationApprouvée', [PublicationController::class, 'viewApprovedPublications']);// admin
Route::get('/publicationNonApprouvée', [PublicationController::class, 'viewUnapprovedPublications']);// admin
Route::get('/publicationModification', [PublicationController::class, 'viewModificationRequests']);// admin
Route::get('/publicationPopulaire', [PublicationController::class, 'viewPublicationsByPopularity']); // admin
Route::get('/publications/filtrer-par-date', [PublicationController::class, 'filterPublications']) ;//admin
Route::get('/publications/filterByUserId', [PublicationController::class, 'filterByUserId']);

Route::get('/participants/filtrer-by-id/{id}', [ParticipantController::class, 'filtrerParticipantsParUtilisateur']);
Route::get('/participants/filtrer-by-event/{id}', [ParticipantController::class, 'filtrerParticipantsParEvenement']);