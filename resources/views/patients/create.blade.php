@extends('layouts.app')

@section('content')
<div class="card">
    <h1 style="margin-top: 0;">Adicionar Novo Paciente</h1>

    <form action="{{ route('pacientes.store') }}" method="POST" style="margin-top: 2rem;">
        @csrf
        <div style="margin-bottom: 1rem;">
            <label for="name">Nome Completo</label>
            <input type="text" name="name" id="name" required style="width: 100%; padding: 0.5rem; margin-top: 0.25rem; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 1rem;">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required style="width: 100%; padding: 0.5rem; margin-top: 0.25rem; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 1rem;">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" id="cpf" required style="width: 100%; padding: 0.5rem; margin-top: 0.25rem; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <div style="margin-bottom: 1rem;">
            <label for="phone">Telefone</label>
            <input type="text" name="phone" id="phone" required style="width: 100%; padding: 0.5rem; margin-top: 0.25rem; border: 1px solid #ccc; border-radius: 4px;">
        </div>
        <button type="submit" style="padding: 0.75rem 1.5rem; background-color: #4299e1; color: white; border: none; border-radius: 4px; cursor: pointer;">Salvar</button>
    </form>
</div>
@endsection
