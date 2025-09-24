@extends('layouts.app')

@section('content')
{{-- Debug temporário - REMOVER depois --}}
<div style="background: #f0f0f0; padding: 1rem; margin-bottom: 1rem;">
    <strong>Total de agendamentos: {{ $appointments->count() }}</strong> 
    @if($appointments->count() > 0)
        <br>Último agendamento: {{ $appointments->first()->scheduled_at }}
    @endif
</div>

<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h1 style="margin-top: 0; margin-bottom: 0;">Meus Agendamentos</h1>
        <a href="{{ route('appointments.create') }}" style="background-color: #4299e1; color: white; padding: 0.5rem 1rem; border-radius: 0.25rem; text-decoration: none;">
            Adicionar Agendamento
        </a>
    </div>

    <table style="width: 100%; margin-top: 2rem; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #f7fafc; border-bottom: 2px solid #e2e8f0;">
                <th style="padding: 0.75rem; text-align: left;">Paciente</th>
                <th style="padding: 0.75rem; text-align: left;">Data e Hora</th>
                <th style="padding: 0.75rem; text-align: left;">Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($appointments as $appointment)
                <tr style="border-bottom: 1px solid #e2e8f0;">
                    <td style="padding: 0.75rem;">{{ $appointment->patient->name ?? 'Paciente não encontrado' }}</td>
                    <td style="padding: 0.75rem;">{{ $appointment->scheduled_at->format('d/m/Y H:i') }}</td>
                    <td style="padding: 0.75rem; display: flex; align-items: center; gap: 1rem;">
                        <a href="{{ route('appointments.edit', $appointment) }}" style="color: #d69e2e; text-decoration: none;">Editar</a>
                        
                        <form method="POST" action="{{ route('appointments.destroy', $appointment) }}" onsubmit="return confirm('Tem certeza que deseja excluir este agendamento?');" style="margin: 0;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: none; border: none; color: #e53e3e; cursor: pointer; padding: 0; font-size: 1rem;">Excluir</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" style="padding: 2rem; text-align: center; color: #718096;">
                        Nenhum agendamento encontrado.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection