<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

    <link href="{{asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{asset('vendor/jQuery.mmenu/dist/css/jquery.mmenu.all.css') }}" rel="stylesheet">
    <!--Owl carosel-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
          integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
          integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
          integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/ajax-loader.gif">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.video.play.png">
    <!--owl carosel-->
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

    <script src="{{asset('vendor/jquery/dist/jquery.min.js') }}"></script>
</head>

<body>

@include('partials.navbar')

@yield('content')

@include('partials.footer')


<script crossorigin="anonymous"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
        integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{asset('vendor/desandro-matches-selector/matches_selector.js') }}"></script>
<script src="{{asset('vendor/ev-emitter/ev-emitter.js') }}"></script>
<script src="{{asset('vendor/fancyselect/fancySelect.css') }}"></script>
<script src="{{asset('vendor/fizzy-ui-utils/utils.js') }}"></script>
<script src="{{asset('vendor/get-size/get-size.js') }}"></script>
<script src="{{asset('vendor/imagesloaded/imagesloaded.js') }}"></script>
<script src="{{asset('vendor/isotope/isotope.js') }}"></script>

<script src="{{asset('vendor/jquery.counterup/jquery.counterup.js') }}"></script>
<script src="{{asset('vendor/jQuery.mmenu/dist/js/jquery.mmenu.min.umd.js') }}"></script>
<script src="{{asset('vendor/jQuery.accordion/js/jquery.accordion.js') }}"></script>
<script src="{{asset('vendor/maplace/dist/maplace.js') }}"></script>
<script src="{{asset('vendor/masonry/dist/masonry.pkgd.js') }}"></script>
<script src="{{asset('vendor/matchHeight/dist/jquery.matchHeight-min.js') }}"></script>
<script src="{{asset('vendor/outlayer/outlayer.js') }}"></script>

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
