<!DOCTYPE html>
<html lang="en">
<head>  
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144789228-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-144789228-1', {
            'cookie_prefix' : 'malibutest',
            'cookie_domain' : 'http://www.localhost.com/malibusecure',
            'cookie_expire' : 0,
            'user_id' : 'USER_ID'
        });
    </script>

    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Malibu Oceanfront Property</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">

    <!-- Scripts -->  
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/vendor/holder.min.js') }}"></script>
    <script src="{{ asset('js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/all.js') }}"></script>
    <script src="{{ asset('js/solid.js') }}"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<header class="shadow-sm bg-white">
        <div class="navbar navbar-expand-lg container d-flex justify-content-between pt-3 pb-3 align-items-center">
            <div>
                <img src="img/logo.png" alt="" id="site-logo"/>
            </div>
            <div>
                <ul class="nav">
                @guest
                    <li class="mr-3">
                        <a href="{{ route('login') }}">Log In</a>
                    </li>
                @else
                    <li class="mr-3">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Log Out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>  
                @endguest   
                </ul>
            </div>
        </div>
    </header>

@yield('content')

</body>

<footer class="footer mt-auto pt-5 pb-5">
    <div class="container text-center px-md-5">
        <span class="text-muted px-md-5">* Due to legal concerns from the client's side, sensitive contents of this website are replaced with stock images and dummy texts. No copyright infringement intended. &copy; Dinah Chen 2019 </span>
    </div>
    <a href="#" id="backtop"><i class="fas fa-long-arrow-alt-up mr-2"></i>Back Top</a>
</footer>

    
</html>