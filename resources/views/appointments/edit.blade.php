@extends('layouts.app')

@section('content')
<div class="card">
    <h1 style="margin-top: 0;">Editar Agendamento</h1>

    <form action="{{ route('appointments.update', $appointment) }}" method="POST" style="margin-top: 2rem;">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 1rem;">
            <label for="patient_id" style="display: block; font-weight: 600;">Paciente</label>
            <select name="patient_id" id="patient_id" required style="width: 100%; padding: 0.5rem; margin-top: 0.25rem; border: 1px solid #ccc; border-radius: 4px;">
                @foreach ($patients as $patient)
                    <option value="{{ $patient->id }}" @if($patient->id == $appointment->patient_id) selected @endif>
                        {{ $patient->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div style="margin-bottom: 1rem;">
            <label for="scheduled_at" style="display: block; font-weight: 600;">Data e Hora</label>
            <input type="datetime-local" name="scheduled_at" id="scheduled_at" value="{{ $appointment->scheduled_at->format('Y-m-d\TH:i') }}" required style="width: 100%; padding: 0.5rem; margin-top: 0.25rem; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div style="margin-bottom: 1rem;">
            <label for="notes" style="display: block; font-weight: 600;">Notas (Opcional)</label>
            <textarea name="notes" id="notes" rows="4" style="width: 100%; padding: 0.5rem; margin-top: 0.25rem; border: 1px solid #ccc; border-radius: 4px;">{{ $appointment->notes }}</textarea>
        </div>

        <div style="display: flex; justify-content: flex-end; margin-top: 2rem;">
            <button type="submit" style="padding: 0.75rem 1.5rem; background-color: #3b82f6; color: white; border: none; border-radius: 4px; cursor: pointer;">
                Atualizar Agendamento
            </button>
        </div>
    </form>
</div>
@endsection