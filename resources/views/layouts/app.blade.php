<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Médico</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; background-color: #f7fafc; margin: 0; }
        .container { max-width: 1200px; margin: 0 auto; padding: 2rem; }
        .navbar { background-color: #fff; border-bottom: 1px solid #e2e8f0; padding: 1rem 2rem; display: flex; justify-content: space-between; align-items: center; }
        .navbar a { color: #2d3748; text-decoration: none; font-weight: 600; }
        .navbar a.nav-link { margin-left: 1.5rem; }
        .card { background-color: #fff; border-radius: 8px; padding: 2rem; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -1px rgba(0,0,0,0.06); }
        .button-logout { background: none; border: none; color: #4a5568; cursor: pointer; font-weight: 600; font-size: 1rem; }
    </style>
</head>
<body>
    <nav class="navbar">
        <div>
            <a href="{{ route('dashboard') }}">Painel Médico</a>
            <a href="{{ route('dashboard') }}" class="nav-link">Agendamentos</a>
            <a href="{{ route('pacientes.index') }}" class="nav-link">Pacientes</a>
        </div>
        <div>
            @auth
                <span style="margin-right: 1rem;">Olá, {{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <button type="submit" class="button-logout">Sair</button>
                </form>
            @endauth
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>
</body>
</html>

