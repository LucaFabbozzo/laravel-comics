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
    $cards_books = config('db.cards_books');
    return view('home', compact('cards_books'));
})->name('home');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/comics', function () {
    $cards_books = config('db.cards_books');
    return view('comics', compact('cards_books'));
})->name('comics');


// La route utilizza il metodo get di Laravel per indicare che sarà attiva solo per le richieste HTTP di tipo GET. Il primo parametro della route è l'URL che attiverà questa route, ovvero /comics-detail/{id}. L'URL contiene una variabile di nome id, che sarà passata come argomento alla funzione di callback della route.

// La funzione di callback viene eseguita quando viene effettuata una richiesta all'URL specificato. In questo caso, la funzione esegue alcune operazioni su un array di oggetti (config('db.cards_books')) per filtrare gli oggetti con l'ID specificato nella richiesta. Una volta ottenuto l'oggetto desiderato, viene passato alla vista (template HTML) di nome comics_detail attraverso l'istruzione return view('comics_detail', compact('comic'));. L'istruzione compact crea un array associativo a partire dalle variabili presenti nell'ambiente corrente, in modo che possano essere passate alla vista e utilizzate per generare il contenuto della pagina.

// L'istruzione ->name('comics_detail') assegna un nome alla route, che può essere utilizzato per generare URL dinamicamente nel codice.


Route::get('/comics-detail/{id}', function($id) {
    $comics_get = array_filter(config('db.cards_books'), fn ($card) => $card['id'] == $id);
    //dd($comics_get);
    $comics_key = array_key_first($comics_get);
    $comic = $comics_get[$comics_key];
    //dd($comic);
    return view('comics_detail', compact('comic'));
})->name('comics_detail');



Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');
