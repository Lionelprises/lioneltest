<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Accueil Authentification

Route::get('/', function() {
    return view('auth.login');
});
Route::get('/administrateur', function() {
    return view('page.administrateur');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'AccueilController@index')->name('home');
Route::get('/home/nouveau', 'TuteurController@index')->name('nouveau');

// controller enregistrer et Afficher
 
Route::post('/home/tuteur', 'TuteurController@store')->name('tuteur.store');
Route::post('/home/apprenant', 'ApprenantController@store')->name('apprenant.store');
Route::get('/home/liste', 'ApprenantController@list')->name('liste');
Route::post('/home/supprimer/{email}', 'ApprenantController@supprimer')->name('apprenant.supprimer');