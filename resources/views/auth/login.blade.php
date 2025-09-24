<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
        <h2>Login do Médico</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                @error('email') <p class="error">{{ $message }}</p> @enderror
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input id="password" type="password" name="password" required>
            </div>
            <button type="submit">Entrar</button>
        </form>
        <p style="text-align: center; margin-top: 1rem;">
            Não tem uma conta? <a href="{{ route('register') }}">Registre-se</a>
        </p>
    </div>
</body>
</html>
