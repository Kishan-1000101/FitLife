<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'FitLife') }}</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div id="app">

        <div class="hero-section">
            <div>
                <img src="{{ asset('images/FitLife_Logo.png') }}" alt="FitLife Logo" style="width: 200px; height: auto; margin-bottom: 20px;">
                <h1>Welcome to FitLife</h1>
                <p>Your Journey to a Healthier Life Starts Here!</p>
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg mr-2">{{ __('Login') }}</a>
                <a href="{{ route('register') }}" class="btn btn-secondary btn-lg">{{ __('Register') }}</a>
            </div>
        </div>

        <div class="container features-section">
            <div class="row">
                <div class="col-md-4">
                    <div class="feature">
                        <i class="fas fa-dumbbell feature-icon"></i>
                        <h3>Personalized Workouts</h3>
                        <p>Get workout plans tailored to your fitness goals.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature">
                        <i class="fas fa-apple-alt feature-icon"></i>
                        <h3>Diet Plans</h3>
                        <p>Follow diet plans customized for your dietary needs.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature">
                        <i class="fas fa-chart-line feature-icon"></i>
                        <h3>Track Your Progress</h3>
                        <p>Monitor your progress and achieve your fitness goals.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <p>&copy; 2024 FitLife. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
