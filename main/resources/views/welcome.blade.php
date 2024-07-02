<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'FitLife') }}</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
</head>
<body>
    <div class="container text-center mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Welcome to FitLife') }}</div>
                    <div class="card-body">
                        <h1 class="display-4">Your Journey to a Healthier Life Starts Here!</h1>
                        <p class="lead">Join FitLife and get personalized workout and diet plans tailored to your goals.</p>
                        <div class="mt-4">
                            <a href="{{ route('login') }}" class="btn btn-primary btn-lg mr-2">{{ __('Login') }}</a>
                            <a href="{{ route('register') }}" class="btn btn-secondary btn-lg">{{ __('Register') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
