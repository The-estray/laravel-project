<?php

use App\Http\Controllers\MyPlaceController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/posts', [PostController::class, 'index']);
