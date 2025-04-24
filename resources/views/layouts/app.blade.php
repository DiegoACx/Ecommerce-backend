<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --unab-orange: #f7941d;
            --unab-orange-dark: #d6781c;
            --unab-orange-light: #f8e0b3;
        }

        body {
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(to bottom right, #ffffff, var(--unab-orange-light));
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background-color: var(--unab-orange) !important;
            border-bottom: none;
        }

        .navbar-brand img {
            height: 40px;
        }

        .navbar-nav .nav-link {
            color: white !important;
            font-weight: 600;
        }

        .navbar-nav .nav-link:hover {
            text-decoration: underline;
        }

        .navbar-toggler {
            border-color: white;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23ffffff' viewBox='0 0 30 30'%3e%3cpath stroke='%23ffffff' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        #app {
            flex: 1;
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 20px;
            flex-grow: 1;
        }

        .auth-container {
            width: 100%;
            max-width: 500px;
            background-color: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 0.7s ease-in-out;
        }

        .auth-container .card-header {
            background-color: var(--unab-orange);
            color: white;
            font-weight: 700;
            text-align: center;
            border-radius: 10px 10px 0 0 !important;
            padding: 15px;
        }

        .auth-container .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
        }

        .auth-container .card-body {
            padding: 30px;
        }

        .form-control {
            border-radius: 10px;
            padding: 10px 15px;
            border: 1px solid #ccd6dd;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: var(--unab-orange);
            box-shadow: 0 0 0 0.2rem rgba(247, 148, 29, 0.25);
        }

        .btn-unab {
            background-color: var(--unab-orange);
            color: white;
            font-weight: 600;
            padding: 10px 25px;
            border-radius: 10px;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-unab:hover {
            background-color: var(--unab-orange-dark);
            transform: translateY(-2px);
        }

        .btn-link-unab {
            color: var(--unab-orange);
            text-decoration: none;
            font-weight: 600;
        }

        .btn-link-unab:hover {
            color: var(--unab-orange-dark);
            text-decoration: underline;
        }

        footer {
            background-color: var(--unab-orange);
            color: white;
            text-align: center;
            padding: 12px 0;
            font-size: 0.9rem;
            margin-top: auto;
            box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
        }

        /* Password toggle */
        .password-toggle-container {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #6c757d;
            z-index: 5;
        }

        .password-toggle:hover {
            color: var(--unab-orange);
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive adjustments */
        @media (max-width: 576px) {
            .auth-container {
                padding: 15px;
            }
            
            .auth-container .card-body {
                padding: 20px;
            }
            
            .navbar-brand img {
                height: 30px;
            }
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="https://www.unab.edu.co/wp-content/uploads/2020/03/logo-horizontal-unab-blanco.png" alt="Logo UNAB">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer>
        © {{ date('Y') }} UNAB. Todos los derechos reservados.
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script>
        function togglePassword(id) {
            const input = document.getElementById(id);
            const icon = input.nextElementSibling;
            
            if (input.type === "password") {
                input.type = "text";
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                input.type = "password";
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        }
    </script>
</body>
</html>