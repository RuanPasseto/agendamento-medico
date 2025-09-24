@extends('layouts.app')

@section('content')
<div class="card">
    <h1 style="margin-top: 0;">Editar Paciente: {{ $paciente->name }}</h1>

    <form action="{{ route('pacientes.update', $paciente) }}" method="POST" style="margin-top: 2rem;">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 1rem;">
            <label for="name" style="display: block; font-weight: 600;">Nome Completo</label>
            <input type="text" name="name" id="name" value="{{ old('name', $paciente->name) }}" required style="width: 100%; padding: 0.5rem; margin-top: 0.25rem; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div style="margin-bottom: 1rem;">
            <label for="email" style="display: block; font-weight: 600;">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email', $paciente->email) }}" required style="width: 100%; padding: 0.5rem; margin-top: 0.25rem; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div style="margin-bottom: 1rem;">
            <label for="cpf" style="display: block; font-weight: 600;">CPF</label>
            <input type="text" name="cpf" id="cpf" value="{{ old('cpf', $paciente->cpf) }}" required style="width: 100%; padding: 0.5rem; margin-top: 0.25rem; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div style="margin-bottom: 1rem;">
            <label for="phone" style="display: block; font-weight: 600;">Telefone</label>
            <input type="text" name="phone" id="phone" value="{{ old('phone', $paciente->phone) }}" required style="width: 100%; padding: 0.5rem; margin-top: 0.25rem; border: 1px solid #ccc; border-radius: 4px;">
        </div>

        <div style="display: flex; justify-content: flex-end; margin-top: 2rem;">
            <button type="submit" style="padding: 0.75rem 1.5rem; background-color: #3b82f6; color: white; border: none; border-radius: 4px; cursor: pointer;">
                Atualizar Paciente
            </button>
        </div>
    </form>
</div>
@endsection