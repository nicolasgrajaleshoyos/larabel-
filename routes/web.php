<?php

use Illuminate\Support\Facades\Route;
use App\Models\Empleo;
$empleos = Empleo::all();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {
    return view('prueba');
});

Route::get('/coctatenos', function () {
    return view('contac');
});
Route::get('/empleo', function () use ($empleos){
    return view('empleo', [
        'empleos' => $empleos
    ]);
});

Route::get('/empleo/{id}', function ($id) use ($empleos) {
    $empleo = Empleo::find($id);
    return view('empleo-detalle', [
        'empleo' => $empleo
    ]);
});