<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class job  extends Model

    {
        use HasFactory;
        
        protected $table = 'job_list';//para que los datos se puedan modificar 
        protected $fillable = [
            'title',
            'company',
            'location',
            'description',
            'salary',
        ];
    }

    
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
        return $empleos;


    