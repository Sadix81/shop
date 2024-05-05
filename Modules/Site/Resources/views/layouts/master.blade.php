<!DOCTYPE html>
<html lang="fa">
<head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color" content="#2962ff">
        <meta name="msapplication-navbutton-color" content="#2962ff">
        <meta name="apple-mobile-web-app-status-bar-style" content="#2962ff">
        <title>YektaKala | home v1</title>
        <link rel="stylesheet" href="{{asset('css/dependencies.css')}}">
        <link rel="stylesheet" href="{{asset('css/theme.css')}}">
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">
{{--        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />--}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

<div class="page-wrapper">

    @include('site::layouts.__header')

            @yield('content')

        @include('site::layouts.__footer')
</div>

    <script src="{{asset('js/dependencies/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/dependencies/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/dependencies/bootstrap-slider.min.js')}}"></script>
    <script src="{{asset('js/dependencies/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('js/dependencies/jquery.simple.timer.min.js')}}"></script>
    <script src="{{asset('js/dependencies/iziToast.min.js')}}"></script>
    <script src="{{asset('js/dependencies/fancybox.umd.js')}}"></script>
    <script src="{{asset('js/dependencies/nouislider.min.js')}}"></script>
    <script src="{{asset('js/dependencies/wNumb.js')}}"></script>
    <script src="{{asset('js/dependencies/remodal.min.js')}}"></script>
    <script src="{{asset('js/dependencies/select2.min.js')}}"></script>
    <script src="{{asset('js/dependencies/simplebar.min.js')}}"></script>
    <script src="{{asset('js/dependencies/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('js/dependencies/zoomsl.min.js')}}"></script>
    <script src="{{asset('js/theme.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

</body>

</html>
