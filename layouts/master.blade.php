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
    <link href="{{asset('vendor/animate.css/animate.css') }}" rel="stylesheet">
    <link href="{{asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{asset('vendor/jQuery.mmenu/dist/css/jquery.mmenu.all.css') }}" rel="stylesheet">
    <link href="{{asset('vendor/owl.carousel/dist/assets/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{asset('vendor/owl.carousel/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{asset('vendor/owl.carousel/dist/assets/owl.theme.default.css') }}" rel="stylesheet">
    <link href="{{asset('vendor/owl.carousel/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{asset('vendor/revolution/css/layers.css') }}" rel="stylesheet">
    <link href="{{asset('vendor/revolution/css/navigation.css') }}" rel="stylesheet">
    <link href="{{asset('vendor/revolution/css/settings.css') }}" rel="stylesheet">
    <!-- Fonts-->
    <link href="https://cdn.jsdelivr.net/npm/linearicons@1.0.2/dist/web-font/style.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/open-sans-all@0.1.3/css/open-sans.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css.map" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/FontAwesome.otf" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.eot"
          rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.svg"
          rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.ttf"
          rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff"
          rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff2"
          rel="stylesheet">
    <!--Theme style-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

@include('partials.navbar')

@yield('content')

@include('partials.footer')


<script crossorigin="anonymous"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>

<script src="{{asset('vendor/animate.css/animate.css') }}"></script>
<script src="{{asset('vendor/desandro-matches-selector/matches_selector.js') }}"></script>
<script src="{{asset('vendor/ev-emitter/ev-emitter.js') }}"></script>
<script src="{{asset('vendor/fancyselect/fancySelect.css') }}"></script>
<script src="{{asset('vendor/fizzy-ui-utils/utils.js') }}"></script>
<script src="{{asset('vendor/get-size/get-size.js') }}"></script>
<script src="{{asset('vendor/imagesloaded/imagesloaded.js') }}"></script>
<script src="{{asset('vendor/isotope/isotope.js') }}"></script>
<script src="{{asset('vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{asset('vendor/jquery.counterup/jquery.counterup.js') }}"></script>
<script src="{{asset('vendor/jQuery.mmenu/dist/js/jquery.mmenu.min.umd.js') }}"></script>
<script src="{{asset('vendor/jQuery.accordion/js/jquery.accordion.js') }}"></script>
<script src="{{asset('vendor/maplace/dist/maplace.js') }}"></script>
<script src="{{asset('vendor/masonry/dist/masonry.pkgd.js') }}"></script>
<script src="{{asset('vendor/matchHeight/dist/jquery.matchHeight-min.js') }}"></script>
<script src="{{asset('vendor/outlayer/outlayer.js') }}"></script>
<script src="{{asset('vendor/owl.carousel/dist/owl.carousel.min.js') }}"></script>
<script src="{{asset('vendor/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{asset('vendor/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{asset('vendor/waypoints/lib/waypoints.debug.js') }}"></script>

<script src="{{asset('js/accordion.js') }}"></script>
<script src="{{asset('js/couterup.js') }}"></script>
<script src="{{asset('js/custom.js') }}"></script>
<script src="{{asset('js/fancy-select-custom.js') }}"></script>
<script src="{{asset('js/gmap.js') }}"></script>
<script src="{{asset('js/ins-place.js') }}"></script>
<script src="{{asset('js/isotope-custom.js') }}"></script>
<script src="{{asset('js/match-height-custom.js') }}"></script>
<script src="{{asset('js/mmenu-function.js') }}"></script>
<script src="{{asset('js/owl-custom.js') }}"></script>
<script src="{{asset('js/plugins-compressed.js') }}"></script>
<script src="{{asset('js/revo-custom.js') }}"></script>
<script src="{{asset('js/theme-function.js') }}"></script>


</body>
</html>
