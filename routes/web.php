<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DbclassController;

Route::get('/', [DbclassController::class, 'index']);
Route::get('/add', [DbclassController::class, 'add']);
Route::post('/add/post', [DbclassController::class, 'create']);
Route::resource('posts', 'PostController');