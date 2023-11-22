<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


/* Route::get('/', function () {
    return view('welcome');
}); */


/*
Con esta Ruta no hay necesita de controlador

Route::get('/', function () {
    return view('index', [
        'posts' => Post::get()
    ]);
});
 */

 Route::get('/', [PostController::class, 'index']);


 