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




Route::get('/login', function () {
    return view('Back.login');
    //return view('Front.login');
});

Route::get('/', function () {
    return view('Front.layout.layout');
    //return view('Front.login');
});


//Admin de la boda.
Route::prefix('felixfelicis')->group(function() {
    return view('Back.Layout.layout');
});
