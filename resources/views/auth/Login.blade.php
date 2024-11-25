<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('{{ asset('images/logindesign.png') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-color: #f4f4f4;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding-left: 150px;
            position: relative;
        }

        .login-container {
            background: #fff;
            padding: 2em;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 400px;
            text-align: center;
            padding-bottom: 10px;
        }

        .login-container h1 {
            margin-bottom: 1em;
            color: #333;
        }

        .input-group {
            margin-bottom: 1em;
        }

        .input-group label {
            display: block;
            margin-bottom: 0.5em;
            color: #333;
        }

        .input-group input {
            width: 100%;
            padding: 0.8em;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 0.8em;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 1em;
            cursor: pointer;
            text-align: center;
        }

        .btn:hover {
            background-color: #0cc3d3;
        }

        .forgot-password {
            margin-top: 1em;
        }

        .forgot-password a {
            color: #007bff;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        .error-message {
            color: red;
            margin-top: 1em;
        }

        .back-btn {
            position: absolute;
            top: 20px;
            left: 20px;
            padding: 0.5em 1em;
            background-color: #07203f;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 1em;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.5s ease;
        }

        .back-btn:hover {
            background: linear-gradient(45deg, #0e42d2, #3711f6);
        }
    </style>
</head>
<body>
    @extends('layouts.app')

    @section('content')
        <div class="login-container">
            <h1>Log In</h1>

            <!-- Display error messages -->
            @if ($errors->any())
                <div class="error-message">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Login Form -->
            <form action="{{ url('/login') }}" method="POST">
                @csrf
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required />
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required />
                </div>
                <button type="submit" class="btn">Log In</button>
            </form>
        </div>
    @endsection
</body>
</html>
