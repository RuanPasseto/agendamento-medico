<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Médico</title>
    <style>
        body { font-family: sans-serif; margin: 0; background-color: #f7fafc; color: #1a202c; }
        .container { max-width: 1200px; margin: 0 auto; padding: 2rem; }
        nav { background-color: #fff; padding: 1rem 2rem; border-bottom: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center; }
        nav a { color: #2d3748; text-decoration: none; font-weight: 600; margin-right: 1.5rem; }
        .card { background-color: #fff; border-radius: 8px; padding: 2rem; box-shadow: 0 1px 3px 0 rgba(0,0,0,0.1); }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 0.75rem; text-align: left; border-bottom: 1px solid #e2e8f0; }
        th { background-color: #edf2f7; font-size: 0.75rem; text-transform: uppercase; }
        .btn { padding: 0.5rem 1rem; border-radius: 4px; text-decoration: none; display: inline-block; border: none; cursor: pointer; }
        .btn-primary { background-color: #4299e1; color: #fff; }
    </style>
</head>
<body>
    <nav>
        <div>
            <a href="{{ route('dashboard') }}">Agendamentos</a>
            <a href="{{ route('patients.index') }}">Pacientes</a>
        </div>
        <div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" style="background: none; border: none; cursor: pointer; color: #2d3748; font-weight: 600; font-size: 1rem;">Sair</button>
            </form>
        </div>
    </nav>
    <main class="container">
        @yield('content')
    </main>
</body>
</html>
