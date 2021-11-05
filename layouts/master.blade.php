<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta content="no-referrer" name="referrer">
    <meta content="My Insurance" name="description">
    <meta content="My Insurance" name="keywords">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="{{asset('img/icons/favicon.ico') }}" rel="icon" sizes="16x16" type="image/gif">
    <!--Styles-->
    <!--bootstrap-->
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" rel="stylesheet">
    <!--bootstrap-->
    <link href="{{asset('animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{asset('vendor/jQuery.mmenu/dist/css/jquery.mmenu.all.css') }}" rel="stylesheet">
    <link href="{{asset('vendor/owl.carousel/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{asset('vendor/owl.carousel/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{asset('vendor/revolution/css/layers.css') }}" rel="stylesheet">
    <link href="{{asset('vendor/revolution/css/navigation.css') }}" rel="stylesheet">
    <link href="{{asset('vendor/revolution/css/settings.css') }}" rel="stylesheet">
    <!-- Fonts-->
    <link href="{{asset('fonts/open-sans/css/open-sans.css') }}" rel="stylesheet">
    <link href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{asset('fonts/Linearicons-Free-v1.0.0/style.css') }}" rel="stylesheet">
    <!--Theme style-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css') }}">
</head>

<body>

@include('partials.navbar')

@yield('content')

@include('partials.footer')


<script src="{{asset('vendor/jquery/dist/jquery.min.js') }}"></script>
<script crossorigin="anonymous"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{asset('vendor/jQuery.mmenu/dist/js/jquery.mmenu.min.umd.js') }}"></script>
<script src="{{asset('js/mmenu-function.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
<script src="{{asset('js/gmap.js') }}"></script>
<script src="{{asset('vendor/owl.carousel/dist/owl.carousel.min.js') }}"></script>
<script src="{{asset('js/owl-custom.js') }}"></script>
<script src="{{asset('vendor/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{asset('vendor/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{asset('js/revo-custom.js') }}"></script>
<script src="{{asset('vendor/matchHeight/dist/jquery.matchHeight-min.js') }}"></script>
<script src="{{asset('js/match-height-custom.js') }}"></script>
<script src="{{asset('js/custom.js') }}"></script>

</body>
</html>
