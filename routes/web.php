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
