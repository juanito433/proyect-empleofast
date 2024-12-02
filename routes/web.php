<?php

use App\Http\Controllers\AdminCandidateController;
use App\Http\Controllers\AdminCompanyController;
use App\Http\Controllers\applicationController;
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



Route::get('/', function () {
    return view('landing.index');
});



Route::get('selection/', function () {
    return view('selection_register');
});
Route::get('/selection/empresa', function () {
    return view('empresa.registro.register_empresa');
});
Route::get('/selection/candidato', function () {
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

//Candidate
Route::get('candidatos/', [candidateController::class, 'candidatos']);
Route::get('candidatos/register', [LoginCandidateController::class, 'register']);
Route::post('candidatos/register', [LoginCandidateController::class, 'saveregister'])->name('candidatos.register');

//sesión

Route::post('candidatos/sesion', [LoginCandidateController::class, 'login'])->name('sessioncandidate');

Route::get('/logout', [LoginCandidateController::class, 'logout'])->name('logouts');


//Jobs


//profile company




//rutas con sesion para companies
Route::middleware('auth:company')->group(function () {
    //Perfil
    Route::get('empresas/admin/profile', [LoginCompanyController::class, 'profile'])->name('company.profile');

    //Editar y actualizar perfil
    Route::get('empresas/perfil/{id}/edit', [AdminCompanyController::class, 'edit']);
    Route::put('empresas/perfil/{id}/update', [AdminCompanyController::class, 'update']);

    //Publication jobs

    // Mostrar el formulario para crear trabajos
    Route::get('admin/jobs/{id}/create', [jobController::class, 'create'])->name('jobs.create');

    // Publicar un trabajo (procesar el formulario)
    Route::post('admin/jobs/{id}/publication', [jobController::class, 'publication']);

    //mostrar los trabajos publicados
    Route::get('empleos/{id}/publicados', [jobController::class, 'show']);

    //sin atender
    Route::get('admin/{id}/pedientes', [applicationController::class, 'pendientes']);

});

//rutas con sesión para candidates
Route::middleware('auth:candidate')->group(function () {
    Route::get('candidatos/perfil', [LoginCandidateController::class, 'profile'])->name('candidate.profile');
    Route::get('candidatos/perfil/{id}/edit', [AdminCandidateController::class, 'edit']);
    Route::put('candidatos/perfil/{id}/update', [AdminCandidateController::class, 'update']);

    Route::get('candidatos/{id}/postulaciones', [jobController::class, 'postulations']);


    //trabajos disponibles
    Route::get('ofertas/{id}/disponibles', [jobController::class, 'jobs'])->name('jobs.show');
    Route::post('aplicar/job/', [applicationController::class, 'store'])->name('applications.store');
});
