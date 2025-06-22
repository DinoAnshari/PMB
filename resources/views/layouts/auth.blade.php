<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Login') - PPDB SMPN Maju Jaya</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('back/assets/images/favicon.png') }}" type="image/x-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('back/assets/css/vendors/flag-icon.css') }}" />
    <link rel="stylesheet" href="{{ asset('back/assets/css/iconly-icon.css') }}" />
    <link rel="stylesheet" href="{{ asset('back/assets/css/bulk-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('back/assets/css/themify.css') }}" />
    <link rel="stylesheet" href="{{ asset('back/assets/css/fontawesome-min.css') }}" />
    <link rel="stylesheet" href="{{ asset('back/assets/css/vendors/weather-icons/weather-icons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('back/assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('back/assets/css/color-1.css') }}" id="color" media="screen" />
  </head>
  <body>
    <!-- Tap to top -->
    <div class="tap-top"><i class="iconly-Arrow-Up icli"></i></div>

    <!-- Loader -->
    <div class="loader-wrapper">
      <div class="loader"><span></span><span></span><span></span><span></span><span></span></div>
    </div>

    <!-- Main Content -->
    <div class="container-fluid">
      <div class="row">
        @yield('content')
      </div>
    </div>

    <!-- JS Files -->
    <script src="{{ asset('back/assets/js/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('back/assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('back/assets/js/vendors/bootstrap/dist/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('back/assets/js/vendors/font-awesome/fontawesome-min.js') }}"></script>
    <script src="{{ asset('back/assets/js/password.js') }}"></script>
    <script src="{{ asset('back/assets/js/script.js') }}"></script>
  </body>
</html>
