<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>UTLearning</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!--Css general-->
    @vite('resources/css/app.css')

    <!--Font Awesome 6-->
    <script src="https://kit.fontawesome.com/a8d4026847.js" crossorigin="anonymous"></script>
</head>

<body class="antialiased">
    <!--nav-->
    <div class="topnav">
        <a href="/">
             <img src="{{ secure_asset('img/logo_UT_white.png') }}">
        </a>
        <div class="dropdown">
            <button class="dropbtn"><b>{{ __('Select a language')}}</b>
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="{{ url('locale/es') }}">{{ __('Spanish')}}</a>
                <a href="{{ url('locale/en') }}">{{ __('English')}}</a>
            </div>
        </div>
    </div>
    <div>
        @yield('content')
    </div>
    <!--footer-->
    <div class="footer">
        <div class="footer-pre-section">
            <h1>{{ __('Contact Us')}}</h1>
            <div class="footer-section">
                <div class="footer-section-icons">
                    <i class="fa-solid fa-globe"></i>
                    <a href="http://www.utchetumal.edu.mx/index/">
                        <p>http://www.utchetumal.edu.mx/index/</p>
                    </a>
                </div>
                <div class="footer-section-icons">
                    <i class="fa-solid fa-phone"></i>
                    <a href="tel:+529831291765">
                        <p>{{ __('Phone')}}: (983) 129-1765</p>
                    </a>
                </div>
                <div class="footer-section-icons">
                    <i class="fa-solid fa-envelope"></i>
                    <a href="mailto:servicios.informaticos@utchetumal.edu.mx">
                        <p>servicios.informaticos@utchetumal.edu.mx</p>
                    </a>
                </div>
            </div>
            <div class="footer-section-two">
                <div class="footer-section-two-div">
                    <div class="footer-section-two-icons">
                        <i class="fa-solid fa-language"></i>
                    </div>
                    <div class="footer-section-two-lang">
                        <a href="{{ url('locale/es') }}">{{ __('Spanish')}}</a>
                        <p style="margin:0;">•</p>
                        <a href="{{ url('locale/en') }}">{{ __('English')}}</a>
                    </div>
                </div>
                <div class="footer-section-two-div">
                    <div class="footer-section-two-icons">
                        <i class="fa-solid fa-share-nodes"></i>
                    </div>
                    <div class="footer-section-two-lang">
                        <a  target="_blank" href="{{ url('https://www.facebook.com/UTChetumal/') }}">Facebook</a>
                        <p style="margin:0;">•</p>
                        <a  target="_blank" href="{{ url('https://twitter.com/UTChetumal') }}">Twitter</a>
                        <p style="margin:0;">•</p>
                        <a  target="_blank" href="{{ url('https://www.instagram.com/ut_chetumal/') }}">Instagram</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</body>

</html>