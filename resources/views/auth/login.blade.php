<<<<<<< HEAD
@extends('layouts.header_footer')

@section('content')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<div class="login-container">
    <form action="{{ route('login')}}" method="POST" class="login-form">
        <h2 class="login-title">Bem vindo de volta!</h2>
        @csrf
        <div class="form-group">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" class="form-input" value="{{ old('email') }}" required>
            @error('email') <span class="error-message">{{$message}}</span> @enderror
        </div>
    
        <div class="form-group">
            <label for="password" class="form-label">Senha:</label>
            <input type="password" id="password" name="password" class="form-input">
            @error('password') <span class="error-message">{{$message}}</span> @enderror
        </div>
    
        <input type="submit" class="submit-button" value="Enviar">
    </form>
</div>
@endsection
=======
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <form action="{{route('login') }}" method="post">
        @csrf
        
    <style>
        /* Estilos para a página de login */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .login-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .login-container h1 {
            text-align: center;
            color: #0071e8;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input[type="email"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            font-size: 14px; /* Tamanho da fonte ajustado */
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #0071e8;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px; /* Tamanho da fonte ajustado */
            transition: background-color 0.3s ease; /* Efeito de transição suave */
        }
        .form-group button:hover {
            background-color: #005bbf;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form id="loginForm">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" placeholder="Digite sua senha" required>
            </div>
            <button type="submit">Entrar</button>
        </form>
    </div>
    <div class="footer">
        <p>© 2024 Comunidade de Discussão. Todos os direitos reservados.</p>
    </div>
</body>
</html>
>>>>>>> 50c062ae1c59dc6a034edd3c2640c42cf8c7e966
