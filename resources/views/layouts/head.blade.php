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

<div class="alert alert-primary alert-dismissible fade show text-center text-dark" role="alert">
  Username and password are pre-filled so you have full access to the site. To test registeration process, use the request access code link.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


@yield('content')

</body>

</html>