<?php

use App\Http\Controllers\candidateController;
use App\Models\company;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LoginCandidateController;
use App\Http\Controllers\LoginCompanyController;

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
    return view('empresa.registro.register_empresa');
});
Route::get('selection/candidato', function () {
    return view('candidato.registro.register_candidato');
});

Route::get('trabajos/', function () {
    return view('empleos');
});

Route::get('app/perfil', function () {
    return view('perfil');
});

//Prueba

//company
Route::get('empresas/', [CompanyController::class, 'empresa']);
Route::get('empresas/register', [LoginCompanyController::class, 'register']);
Route::post('empresas/register', [LoginCompanyController::class, 'saveregister'])->name('empresas.register');

//Candidate
Route::get('candidatos/', [candidateController::class, 'candidatos']);
Route::get('candidatos/register', [LoginCandidateController::class, 'register']);
Route::post('candidatos/register', [LoginCandidateController::class, 'saveregister'])->name('candidatos.register');