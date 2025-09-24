@extends('layouts.app')

@section('content')
<div class="card">
    <h1 style="margin-top: 0;">Novo Agendamento</h1>

    <form action="{{ route('appointments.store') }}" method="POST" style="margin-top: 2rem;">
        @csrf
        <div style="margin-bottom: 1rem;">
            <label for="patient_id" style="display: block; font-weight: 600;">Paciente</label>
            <select name="patient_id" id="patient_id" required style="width: 100%; padding: 0.5rem; margin-top: 0.25rem; border: 1px solid #ccc; border-radius: 4px;">
                <option value="">Selecione um paciente</option>
                @foreach ($patients as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                @endforeach
            </select>
        </div>

        <div style="margin-bottom: 1rem;">
            <label for="scheduled_at" style="display: block; font-weight: 600;">Data e Hora</label>
            <input type="datetime-local" name="scheduled_at" id="scheduled_at" required style="width: 100%; padding: 0.5rem; margin-top: 0.25rem; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div style="margin-bottom: 1rem;">
            <label for="notes" style="display: block; font-weight: 600;">Notas (Opcional)</label>
            <textarea name="notes" id="notes" rows="4" style="width: 100%; padding: 0.5rem; margin-top: 0.25rem; border: 1px solid #ccc; border-radius: 4px;"></textarea>
        </div>

        <div style="display: flex; justify-content: flex-end; margin-top: 2rem;">
            <button type="submit" style="padding: 0.75rem 1.5rem; background-color: #3b82f6; color: white; border: none; border-radius: 4px; cursor: pointer;">
                Salvar Agendamento
            </button>
        </div>
    </form>
</div>
@endsection