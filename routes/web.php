<?php

use App\Http\Controllers\candidateController;
use App\Models\company;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\jobController;
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
    return view('app/index');
});

//Prueba

//company
Route::get('empresas/', [CompanyController::class, 'empresa']);

Route::get('empresas/register', [LoginCompanyController::class, 'register']);
Route::post('empresas/register', [LoginCompanyController::class, 'saveregister'])->name('empresas.register');

//sesión

Route::post('empresas/sesion', [LoginCompanyController::class, 'login'])->name('sesion');


Route::get('/logout', [LoginCompanyController::class, 'logout'])->name('logout');



//company register jobs
Route::get('admin/jobs/create', function () {
    return view('admin.jobs.create');
});

//Publication jobs
// Mostrar el formulario para crear trabajos
Route::get('admin/jobs/create', [jobController::class, 'create'])->name('jobs.create');

// Publicar un trabajo (procesar el formulario)
Route::post('admin/jobs/publication', [jobController::class, 'publication'])->name('jobs.publication');



//Candidate
Route::get('candidatos/', [candidateController::class, 'candidatos']);
Route::get('candidatos/register', [LoginCandidateController::class, 'register']);
Route::post('candidatos/register', [LoginCandidateController::class, 'saveregister'])->name('candidatos.register');

//sesión

Route::post('candidatos/sesion', [LoginCandidateController::class, 'login'])->name('sessioncandidate');

Route::get('/logout', [LoginCandidateController::class, 'logout'])->name('logouts');


//Jobs

Route::get('app/perfil', [jobController::class, 'jobs']);

//profile company




//rutas con sesion para companies
Route::middleware('auth:company')->group(function () {
    Route::get('empresas/admin/profile', [LoginCompanyController::class, 'profile'])->name('company.profile');
    // Otras rutas protegidas para la compañía
});

//rutas con sesión para candidates
Route::middleware('auth:candidate')->group(function () {
    Route::get('candidatos/perfil', [LoginCandidateController::class, 'profile'])->name('candidate.profile');
    // Otras rutas protegidas para candidatos
});
