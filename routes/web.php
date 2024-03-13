<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('comics', function () {
    return view('comics');
})->name('comics');

Route::get('show/{index}', function ($index) {

    $comics = config('comics');
    foreach ($comics as $i => $c) {
        if ($i == $index) $comic = $c;
    };

    return view('products.show', compact('comic'));
})->name('show');
