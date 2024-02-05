<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <style>
        body {
            font-family: 'figtree', sans-serif;
            background: url('your-background-image.jpg') center/cover; /* Replace 'your-background-image.jpg' with your actual background image */
            color: #333;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(to right, #f2f2f2, #e6e6e6); /* Adjust gradient colors as needed */
        }

        .auth-links {
            position: fixed;
            top: 20px;
            right: 20px;
            text-align: right;
            z-index: 10;
        }

        .auth-links a {
            margin-left: 15px;
            font-weight: 600;
            color: #666;
            transition: color 0.3s ease;
        }

        .auth-links a:hover {
            color: #000;
        }

        /* Customize your login and register buttons as needed */
        .auth-links .login-btn {
            color: #3490dc;
        }

        .auth-links .register-btn {
            color: #38c172;
        }
    </style>
</head>
<body class="antialiased">
    <div class="container">
        @if (Route::has('login'))
            <div class="auth-links">
                @auth
                    <a href="{{ url('/dashboard') }}" class="login-btn">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="login-btn">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="register-btn">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</body>
</html>
