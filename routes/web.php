<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {
    return view('prueba');
});

Route::get('/coctatenos', function () {
    return view('contac');
});


 $empleos = [
        [
            'id' => 1,
            'title' => 'Desarrollador Full Stack',
            'company' => 'Tech Solutions',
            'location' => 'Bogotá, Colombia',
            'description' => 'Buscamos un desarrollador full stack con experiencia en Laravel y Vue.js.',
            'salary' => '3000 USD mensuales',
        ],
        [
            'id' => 2,
            'title' => 'Ingeniero de Datos',
            'company' => 'DataCorp',
            'location' => 'Medellín, Colombia',
            'description' => 'Se requiere ingeniero de datos con conocimientos en ETL y bases de datos SQL y NoSQL.',
            'salary' => '3500 USD mensuales',
        ],
        [
            'id' => 3,
            'title' => 'Diseñador UX/UI',
            'company' => 'Creative Minds',
            'location' => 'Cali, Colombia',
            'description' => 'Estamos en busca de un diseñador UX/UI con un portafolio sólido y experiencia en Figma.',
            'salary' => '2800 USD mensuales',
        ],
    ];
Route::get('/empleo', function () use ($empleos){

  
    return view('empleo', [
        'empleos' => $empleos
    ]);
});



Route::get('/empleo/{id}', function ($id) use ($empleos) {

   

    $empleo = collect($empleos)->first(fn ($empleo) => $empleo['id'] == $id);

    return view('empleo-detalle', [
        'empleo' => $empleo
    ]);
});
