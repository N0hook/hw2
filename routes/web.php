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

Route::get('/', function () {
    return view('home');
});



Route::get("/home", "App\Http\Controllers\HomeController@carica_home");

Route::get("/signup", "App\Http\Controllers\SignupController@signup_form");
Route::post("/signup", "App\Http\Controllers\SignupController@do_signup");

Route::get("/login", "App\Http\Controllers\LoginController@login_form");
Route::post("/login", "App\Http\Controllers\LoginController@do_login");

Route::get("/logout", "App\Http\Controllers\LogoutController@do_logout");

Route::get("/cerca_album", "App\Http\Controllers\CercaAlbumController@cerca_album");

Route::get("/preferiti", "App\Http\Controllers\PreferitiController@mostra_preferiti");

Route::get("/crea_liste", "App\Http\Controllers\CreaListaController@lista");

Route::get("/visualizza_classifica", "App\Http\Controllers\ClassificaController@mostra_classifica");

Route::get("/carica_blocchi", "App\Http\Controllers\HomeController@carica_blocchi");

Route::get('/richiesta_classifica/{paese}', "App\Http\Controllers\ClassificaController@richiesta_classifica");

Route::get('/api_cerca_album/{titolo}', "App\Http\Controllers\CercaAlbumController@api_cerca_album");
Route::get('/controllo_preferiti/{id}', "App\Http\Controllers\CercaAlbumController@controllo_preferiti");
Route::get('/check_connessione', "App\Http\Controllers\CercaAlbumController@check_connessione");
Route::post('/aggiungi_album',"App\Http\Controllers\CercaAlbumController@aggiungi_album");
Route::post('/aggiungi_preferito', "App\Http\Controllers\CercaAlbumController@aggiungi_preferito");
Route::get('/check_preferito/{id}', "App\Http\Controllers\CercaAlbumController@check_preferito");


Route::get("/trova_preferiti", "App\Http\Controllers\PreferitiController@trova_preferiti");
Route::get('/rimuovi_preferito/{id_album}', "App\Http\Controllers\PreferitiController@rimuovi_preferito");

Route::get("/liste", "App\Http\Controllers\ListeController@mostra_liste");


