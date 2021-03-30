<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostclassController;

Route::post('/post', [PostclassController::class, 'post']);

