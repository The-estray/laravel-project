<?php

use App\Http\Controllers\MyPlaceController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/posts', [Post::class, 'index']);
