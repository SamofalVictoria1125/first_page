<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});


Route::get('/my_page', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return view('welcome');
});




Route::get('/fav', [\App\Http\Controllers\MainController::class, 'like']);



Route::get('/account', [\App\Http\Controllers\MainController::class, 'account']);

Route::get('/cataloge', [\App\Http\Controllers\MainController::class, 'cataloge']);
