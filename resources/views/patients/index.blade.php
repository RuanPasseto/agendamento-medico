@extends('layouts.app')

@section('content')
<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h1 style="margin-top: 0; margin-bottom: 0;">Gerenciar Pacientes</h1>
        <a href="{{ route('pacientes.create') }}" style="background-color: #4299e1; color: white; padding: 0.5rem 1rem; border-radius: 0.25rem; text-decoration: none;">
            Adicionar Novo Paciente
        </a>
    </div>

    <table style="width: 100%; margin-top: 2rem; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #f7fafc; border-bottom: 2px solid #e2e8f0;">
                <th style="padding: 0.75rem; text-align: left;">Nome</th>
                <th style="padding: 0.75rem; text-align: left;">Email</th>
                <th style="padding: 0.75rem; text-align: left;">Telefone</th>
                <th style="padding: 0.75rem; text-align: left;">Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($patients as $patient)
                <tr style="border-bottom: 1px solid #e2e8f0;">
                    <td style="padding: 0.75rem;">{{ $patient->name }}</td>
                    <td style="padding: 0.75rem;">{{ $patient->email }}</td>
                    <td style="padding: 0.75rem;">{{ $patient->phone }}</td>
                    <td style="padding: 0.75rem; display: flex; align-items: center; gap: 1rem;">
                        <a href="{{ route('pacientes.edit', $patient) }}" style="color: #d69e2e; text-decoration: none;">Editar</a>
                        <form method="POST" action="{{ route('pacientes.destroy', $patient) }}" onsubmit="return confirm('Tem certeza que deseja excluir este paciente?');" style="margin: 0;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: none; border: none; color: #e53e3e; cursor: pointer; padding: 0; font-size: 1rem;">Excluir</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="padding: 2rem; text-align: center; color: #718096;">
                        Nenhum paciente cadastrado.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection