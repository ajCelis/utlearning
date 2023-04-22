@extends('layouts.app')


@section('content')

<head>
<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

</head>
<div>
    <div class="container">

        <div class="welcome">
            <div class="welcome-header">{{ __('Login') }}</div>

            <div class="welcome-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="welcome-section">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="welcome-section-adjustment">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="welcome-section">
                        <div class="welcome-section-row">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                        <div class="welcome-section-adjustment">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="welcome-section">
                        <div class="welcome-section-row">
                            <button type="submit" class="welcome-section-btn">
                                {{ __('Login') }}
                            </button>

                            <div>
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}

                                </label>
                            </div>
                        </div>

                    </div>
            </div>
            </form>
        </div>
        <div class="welcome-two">
            <p>{{ __('Social media')}}</p>
            <img class="welcome-img" src="{{ asset('img/login/modelo-login.png') }}">
            <a href="https://www.facebook.com/UTChetumal/" class="facebook" target="_blank"><i class="fa-brands fa-facebook-f facebook-icon"></i></a>
            <a href="https://www.instagram.com/ut_chetumal/" class="instagram" target="_blank"><i class="fa-brands fa-instagram instagram-icon"></i></a>
            <a href="https://twitter.com/UTChetumal" class="twitter" target="_blank"><i class="fa-brands fa-twitter twitter-icon"></i></a>
            <a href="https://www.addtoany.com/add_to/google_gmail?linkurl=http%3A%2F%2Fwww.utchetumal.edu.mx%2Findex%2F&linkname=UT%20Chetumal%20%7C%20Universidad%20Tecnol%C3%B3gica%20de%20Chetumal&linknote=" class="gmail" target="_blank"><i class="fa-solid fa-envelope gmail-icon"></i></a>

            
        </div>
    </div>
</div>
<div style='margin-top: -150px;     scroll-snap-type: y mandatory;'>
    @include('include.announcements')
</div>
<div class="section-two">
    <div class="section-two-container">
        <p>{{ __('Important announcement')}}</p>
    </div>
    @include('include.banner')
</div>
<div class="section-three">
    <div class="section-three-container">
        <p>{{ __('Statistical data')}}</p>
        @include('include.numbers')

    </div>
</div>



@endsection