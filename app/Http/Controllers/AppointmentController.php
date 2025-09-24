<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{

    public function index()
    {
        $appointments = Appointment::where('doctor_id', Auth::id())
            ->with('patient')
            ->orderBy('scheduled_at', 'desc')
            ->get();
            
        return view('dashboard', compact('appointments'));
    }


    public function create()
    {
        $patients = Patient::orderBy('name')->get();
        return view('appointments.create', compact('patients'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'scheduled_at' => 'required|date',
            'notes' => 'nullable|string',
        ]);

        $data = $request->all();
        $data['doctor_id'] = Auth::id();

        Appointment::create($data);

        return redirect()->route('dashboard')->with('success', 'Agendamento criado com sucesso!');
    }


    public function show(Appointment $appointment)
    {
        if ($appointment->doctor_id !== Auth::id()) {
            abort(403);
        }
        return view('appointments.show', compact('appointment'));
    }


    public function edit(Appointment $appointment)
    {
        if ($appointment->doctor_id !== Auth::id()) {
            abort(403);
        }

        $patients = Patient::orderBy('name')->get();
        return view('appointments.edit', compact('appointment', 'patients'));
    }

    public function update(Request $request, Appointment $appointment)
    {
        if ($appointment->doctor_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'scheduled_at' => 'required|date',
            'notes' => 'nullable|string',
        ]);

        $appointment->update($request->all());
         return redirect()->route('dashboard')->with('success', 'Agendamento atualizado com sucesso!');
    }

    public function destroy(Appointment $appointment)
    {
        if ($appointment->doctor_id !== Auth::id()) {
            abort(403);
        }
        
        $appointment->delete();
         return redirect()->route('dashboard')->with('success', 'Agendamento excluído com sucesso!');
    }
}

