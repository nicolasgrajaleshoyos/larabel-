<?php

use Illuminate\Support\Facades\Route;
use App\Models\Empleo;
use App\Models\job;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {
    return view('prueba');
});

Route::get('/coctatenos', function () {
    return view('contac');
});
Route::get('/empleo', function () {
    return view('empleo', [
        'empleos' => job::all()
    ]);
});

Route::get('/empleo/{id}', function ($id) {
    $empleo = job::find($id);
    return view('empleo-detalle', [
        'empleo' => $empleo
    ]);
});