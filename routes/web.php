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

Route::get('/comic/{id}', function ($id) {
    $comics = config('comics');

    if(is_numeric($id) && ($id < count($comics) && $id >= 0)){

        $comic = $comics[$id];
        return view('comic', ['comic' => $comic]);

    }else {
        abort('404'); //chiama errore 404
    }

})->name('comic');