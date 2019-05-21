<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>{{ config('app.name', 'BasBlog') }}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        <meta name="keywords" content="blog, business, entertainment, news, sport, wedding">
        <meta name="author" content="Okandeji | Deer Creative Theme">
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="/assets/css/slick.css">
        <link rel="stylesheet" href="/assets/css/jquery-ui.css">
        <link rel="stylesheet" href="/assets/css/custom_bootstrap.css">
        <link rel="stylesheet" href="/assets/css/fontawesome.css">
        <link rel="stylesheet" href="/assets/css/elegant.css">
        <link rel="stylesheet" href="/assets/css/plyr.css">
        <link rel="stylesheet" href="/assets/css/aos.css">
        <link rel="stylesheet" href="/assets/css/animate.css">
        <link rel="stylesheet" href="/assets/css/themify-icons.css">
        <link rel="shortcut icon" href="/assets/images/shortcut_logo.png">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    </head>
    <body>
      <div id="main">
        @include('inc.navbar')
        {{--  <div class="container">  --}}
                @include('inc.messages')
           @yield('content')
        {{--  </div>  --}}
        @include('inc.footer')
        <script src="/assets/js/jquery-3.4.0.min.js"></script>
        <script src="/assets/js/jquery-ui.min.js"></script>
        <script src="/assets/js/slick.min.js"></script>
        <script src="/assets/js/plyr.min.js"></script>
        <script src="/assets/js/aos.js"></script>
        <script src="/assets/js/jquery.scrollUp.min.js"></script>
        <script src="/assets/js/masonry.pkgd.min.js"></script>
        <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="/assets/js/numscroller-1.0.js"></script>
        <script src="/assets/js/jquery.countdown.min.js"></script>
        <script src="/assets/js/main.js"></script>
      </div>
</body>
</html>
