<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentification</title>
    <!-- Bootstrap CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Custom Styles -->
    <style>
        .bg-cover {
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="overflow-hidden">
    <form method="POST" action="{{ route('login.store') }}">
        @csrf
        <div class="position-absolute top-0 start-0 m-4 z-3">
            <img src="{{ asset('storage/images/logo.png') }}" alt="Logo" class="img-fluid" style="height: 80px; filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.5));">
        </div>

        <!-- Background Image with Overlay -->
        <div class="container-fluid vh-100 bg-cover position-relative" style="background-image: url('{{ asset('storage/images/oujda_bg.png') }}');">
            <!-- Overlay -->
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-50"></div>

            <!-- Content -->
            <div class="position-relative z-2">
                <!-- Title -->
                <h1 class="text-center text-white fw-bold display-4 pt-5 mb-0">AUTHENTIFICATION</h1>

                <!-- Login Form -->
                <div class="d-flex justify-content-center align-items-center vh-95 mt-5">
                    <div class="bg-light p-4 rounded shadow w-100" style="max-width: 400px;">
                        <h2 class="text-center fw-bold mb-4">SE CONNECT</h2>
                        <form action="" method="POST">
                            @csrf
                            <!-- CIN Input -->
                            <div class="mb-3">
                                <label for="cin" class="form-label">CIN</label>
                                <input value="665766" type="text" name="cin" id="cin" class="form-control">
                            </div>
                            <!-- Matriculation Number Input -->
                            <div class="mb-3">
                                <label for="password" class="form-label">NUMERO DE MATRICULATION</label>
                                <input value="password123" type="password" name="password" id="password" class="form-control">
                            </div>
                            <!-- Remember Me Checkbox -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                <label for="remember" class="form-check-label">Remember Me</label>
                            </div>
                            <!-- Login Button -->
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>