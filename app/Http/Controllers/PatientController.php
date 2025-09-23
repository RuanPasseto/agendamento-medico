<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index() { return Patient::all(); }

    public function store(Request $request) {
        return Patient::create($request->all());
    }

    public function show(Patient $patient) { return $patient; }

    public function update(Request $request, Patient $patient) {
        $patient->update($request->all());
        return $patient;
    }

    public function destroy(Patient $patient) {
        $patient->delete();
        return response()->json(null, 204);
    }
}

