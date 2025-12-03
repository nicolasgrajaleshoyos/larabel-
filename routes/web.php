<?php

use Illuminate\Support\Facades\Route;
use App\Models\Empleo;
use App\Models\job;
use App\Http\Controllers\JobController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {
    return view('prueba');
});

Route::get('/coctatenos', function () {
    return view('contac');
});


// Ruta para mostrar el formulario de crear empleo
Route::get('/empleo/crear', [JobController::class, 'create'])->name('empleo.create');

// Ruta para guardar el nuevo empleo
Route::post('/empleo', [JobController::class, 'store'])->name('empleo.store');

// Ruta para ver el detalle de un empleo


Route::get('/empleos',[JobController::class, 'index'])->name('jobs.index'); 
Route::get('/empleos/create',[JobController::class, 'create'])->name('jobs.create');   
Route::post('/empleos/crate',[JobController::class, 'store'])->name('jobs.store'); 
Route::get('/empleos/{id}',[JobController::class, 'show'])->name('jobs.show'); 
Route::get('/empleos/{id}/edit',[JobController::class, 'edit'])->name('jobs.edit'); 
Route::get('/empleo/{id}', [JobController::class, 'showDetalle'])->name('empleo.detalle');
Route::put('/empleos/{id}',[JobController::class, 'update'])->name('jobs.update');
Route::delete('/empleos/{id}',[JobController::class, 'destroy'])->name('jobs.delete');

Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');





