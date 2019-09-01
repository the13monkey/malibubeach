@extends('layouts.head')

@section('content')

<div class="container-fluid bg-light" id="full-width-wrapper">
    <div class="row">
        <div class="col-md col-lg-4 px-5 pb-5 d-flex align-items-center">
            
            <form class="form-signin text-center px-md-5" method="POST" action="{{ route('login') }}">
            @csrf
                <img class="mb-4" src="{{ asset('img/logo.png') }}" alt="" width="100" height="auto">
                <h1 class="h3 mb-5 font-weight-normal">Please sign in</h1>

                <label for="inputEmail" class="sr-only">Email address</label>
                <input id="email" type="email" class="form-control mb-2 @error('email') is-invalid @enderror" name="email" value="dinah@immco.us" placeholder="Email address" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="inputPassword" class="sr-only">Password</label>
                <input id="password" type="password" class="form-control mb-5 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Access code" value="uDxeIScQNp7rtWy7JIsK">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                <button class="btn btn-lg bg-db btn-block text-white" type="submit">Sign in</button>
                
                <div class="mt-3">
                    @if (Route::has('register'))
                        <a class="stretched-link text-db mr-md-3" href="{{ route('register') }}">{{ __('Request Access Code') }}</a>
                    @endif
                    @if (Route::has('password.request'))
                        <a class="stretched-link text-muted ml-md-3" href="{{ route('password.request') }}">
                            {{ __('Forgot my access code.') }}
                        </a>
                    @endif
                </div>
                <p class="mt-5 mb-3 text-muted text-center pb-3">* Due to legal concerns from the client's side, sensitive contents of this website are replaced with stock images and dummy texts. No copyright infringement intended. &copy; Dinah Chen 2019 </p>  
            </form>
        </div>
        <div class="col-lg col-lg-8">
            <img src="{{ asset('img/background.jpg') }}" id="hero-image" />
        </div>
    </div>
</div>

@endsection



