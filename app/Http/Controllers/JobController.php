<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\job;

class JobController extends Controller
{
   
    public function index()
    {
        $job = job::with('employer')->get();
        return view('job',['job' => $job]);
    }
    
    public function show($id)
    {
        $job = job::findOrFail($id);
        return view('jobs.show', compact('job'));
    }

    public function create()
    {
        return view('empleo-crear');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'salary' => 'required|string|max:255',
        ]);

        // Crear el nuevo empleo
        job::create($validated);

        // Redirigir a la lista de empleos con un mensaje de éxito
        return redirect('/empleo')->with('success', 'Empleo creado exitosamente');
    }

    public function showDetalle($id)
    {
        $empleo = job::findOrFail($id);
        return view('empleo-detalle', ['empleo' => $empleo]);
    }



}

