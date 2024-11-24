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
Route::get('/', function () {
    return view('layouts.app');
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
Route::get('app/', function () {
    return view('welcome');
});

Route::get('app/perfil', function () {
    return view('layouts.perfil');
});
