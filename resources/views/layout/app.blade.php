<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'SOLAPP')}}</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!--Owlcarousel CSS -->
        <link rel="stylesheet" href="/css/owl.carousel.min.css" />
        <!--Responsive Menu  CSS -->
        <link rel="stylesheet" href="/css/responsive-menu.css" />
        <link rel="stylesheet" href="/css/animate.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
                @include('inc.messages')
           @yield('content')
        </div>

        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        {{-- <script>
             CKEDITOR.replace( 'article-ckeditor' );
        </script> --}}

        <!-- jQuery -->
    <script src="/js/jquery-3.3.1.min.js"></script>
    <!-- easing efect JS -->
    <script src="/js/easing.js"></script>
    <!-- owlcarousel  JS -->
    <script src="/js/owl.carousel.min.js"></script>
    <!-- Responsive menu JS -->
    <script src="/js/responsive-menu.js"></script>
    <!-- Bootstrap JS -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- waypoints JS -->
    <script src="/js/jquery.waypoints.min.js"></script>
    <!-- menu JS -->
    <script src="/js/menumaker.min.js"></script>
    <!-- wow JS -->
    <script src="/js/wow.min.js"></script>
    <!-- main  JS -->
    <script src="/js/main.js"></script>
    {{--  <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="0fb3e5b5-1038-45e7-a153-173d144eee90";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>  --}}


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
