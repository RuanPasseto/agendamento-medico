<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
     <style>
        body { font-family: sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f7fafc; }
        .form-container { background: #fff; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); width: 400px; }
        .form-group { margin-bottom: 1rem; }
        label { display: block; margin-bottom: 0.5rem; }
        input { width: 100%; padding: 0.5rem; border: 1px solid #e2e8f0; border-radius: 4px; box-sizing: border-box; }
        button { width: 100%; padding: 0.75rem; background-color: #4299e1; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .error { color: #e53e3e; font-size: 0.875rem; margin-top: 0.25rem; }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Criar Conta de Médico</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="name">Nome</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input id="password" type="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirmar Senha</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required>
            </div>
            <button type="submit">Registrar</button>
        </form>
         <p style="text-align: center; margin-top: 1rem;">
            Já tem uma conta? <a href="{{ route('login') }}">Faça login</a>
        </p>
    </div>
</body>
</html>
