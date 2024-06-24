<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sakou</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Vos styles CSS */
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8fafc;
            color: #636b6f;
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .full-height {
            flex: 1;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
        }
        .subtitle {
            font-size: 24px;
            margin-top: -20px;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
        .footer {
            background-color: #636b6f;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        .footer .links > a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
            font-weight: 600;
        }
        .footer .social-icons > a {
            color: #fff;
            margin: 0 10px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Sakou
            </div>
            <div class="subtitle">
                Votre solution pour le crowdfunding, le crowdsourcing et la géolocalisation des problèmes.
            </div>
            <img src="association.png" alt="Description de l'image" style="margin-top: 20px;">
            <div class="links" style="margin-top: 20px;">
                <a href="{{ url('/crowdfunding') }}">Crowdfunding</a>
                <a href="{{ url('/crowdsourcing') }}">Crowdsourcing</a>
                <a href="{{ url('/geolocation') }}">Géolocalisation</a>
                <a href="{{ url('/about') }}">À propos</a>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="content">
            <div class="links">
                <a href="{{ url('/contact') }}">Contact</a>
                <a href="{{ url('/privacy') }}">Politique de confidentialité</a>
                <a href="{{ url('/terms') }}">Conditions d'utilisation</a>
            </div>
            <div class="social-icons">
                <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
            </div>
            <p>&copy; 2024 Sakou. Tous droits réservés.</p>
        </div>
    </footer>
</body>
</html>
