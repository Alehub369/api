<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index']);

/* Route::get('/', function () {
    return view('welcome');
}); */
