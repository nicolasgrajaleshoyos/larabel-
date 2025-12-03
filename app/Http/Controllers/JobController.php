<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\job;
use Models\Employer;

class JobController extends Controller
{
   
    public function index()
    {
       
        $job = job::with('employer')->cursorPaginate(3);
        return view('job.index',['empleos' => $job]);
    }
    
    public function show($id)
    {
        $job = job::findOrFail($id);
        return view('jobs.show', compact('job'));
    }

    public function create()
    {
        $employers = \App\Models\Employer::all();
        return view('job.create', ['employers' => $employers]);
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'employer_id' => 'required|exists:employers,id',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'salary' => 'required|string|max:255',
        ]);

        // Obtener el empleador seleccionado
        $employer = \App\Models\Employer::findOrFail($validated['employer_id']);

        // Crear el nuevo empleo con el company_id
        job::create([
            'title' => $validated['title'],
            'company' => $employer->name, // Usar el nombre del empleador seleccionado
            'location' => $validated['location'],
            'description' => $validated['description'],
            'salary' => $validated['salary'],
            'company_id' => $employer->id, // Asociar con el empleador
        ]);

        // Redirigir a la lista de empleos con un mensaje de éxito
        return redirect('/empleos')->with('success', 'Empleo creado exitosamente');
    }

    public function showDetalle($id)
    {
        $empleo = job::findOrFail($id);
        return view('job.show', ['empleo' => $empleo]);
    }

    public function edit($id)
    {
        $job = job::findOrFail($id);
        $employers = \App\Models\Employer::all();
        return view('job.edit', compact('job', 'employers'));
    }

    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'employer_id' => 'required|exists:employers,id',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'salary' => 'required|string|max:255',
        ]);

        // Obtener el empleo a actualizar
        $job = job::findOrFail($id);

        // Obtener el empleador seleccionado
        $employer = \App\Models\Employer::findOrFail($validated['employer_id']);

        // Actualizar el empleo
        $job->update([
            'title' => $validated['title'],
            'company' => $employer->name,
            'location' => $validated['location'],
            'description' => $validated['description'],
            'salary' => $validated['salary'],
            'company_id' => $employer->id,
        ]);

        // Redirigir a la lista de empleos con un mensaje de éxito
        return redirect('/empleos')->with('success', 'Empleo actualizado exitosamente');
    }

}

