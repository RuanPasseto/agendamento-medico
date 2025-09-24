<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{

    public function index()
    {
        $patients = Patient::orderBy('name')->get();
        return view('patients.index', compact('patients'));
    }


    public function create()
    {
        return view('patients.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:patients,email',
            'cpf' => 'required|string|unique:patients,cpf',
            'phone' => 'required|string',
        ]);

        Patient::create($request->all());

        return redirect()->route('pacientes.index');
    }


    public function show(Patient $paciente)
    {

    }

    public function edit(Patient $paciente)
    {
        return view('patients.edit', compact('paciente'));
    }

    public function update(Request $request, Patient $paciente)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:patients,email,' . $paciente->id,
            'cpf' => 'required|string|unique:patients,cpf,' . $paciente->id,
            'phone' => 'required|string',
        ]);
        
        $paciente->update($request->all());

        return redirect()->route('pacientes.index');
    }

    public function destroy(Patient $paciente)
    {
        $paciente->delete();
        return redirect()->route('pacientes.index');
    }
}

