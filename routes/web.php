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
Route::get('app/', function () {
    return view('app');
});

Route::get('/', function () {
    return view('landing.index');
});



Route::get('selection/', function () {
    return view('selection_register');
});
Route::get('selection/empresa', function () {
    return view('register_empresa');
});
Route::get('selection/candidato', function () {
    return view('register_candidato');
});

Route::get('trabajos/', function () {
    return view('empleos');
});

Route::get('app/perfil', function () {
    return view('perfil');
});

