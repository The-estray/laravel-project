<?php

use App\Http\Controllers\MyPlaceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MyPlaceController::class, 'index']);

/*
    Route::get('/1', [MyPlaceController::class, 'index1']);
    Route::get('/2', [MyPlaceController::class, 'index2']);
    Route::get('/3', [MyPlaceController::class, 'index3']);

    Route::get('/mypage', function() {
        return 'This is my page';
    });

    Route::get('/home', function() {
        return 'This is my home!';
    });

    Route::get('/bjj', function(){
        return 'BJJ is cool!';
    });

    Route::get('/gym',function() {
        return 'Gym isnt bad, but not cool!';
    });

    Route::get('/cardistri',function(){
        return 'Cardistri is a cool hobby!';
    });

    Route::get('/water',function(){
        return 'Water is the best drink!';
    });

    Route::get('/steam',function(){
        return 'Steam is the best gameing platform in the world!';
    });

    Route::get('/epicgames',function(){
        return 'Epic Games is total shit!';
    });

    Route::get('/pc',function(){
        return 'Computers are the best!';
}); */

