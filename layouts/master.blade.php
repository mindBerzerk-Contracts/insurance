<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <meta content="no-referrer" name="referrer">
    <meta content="Skelta" name="description">
    <meta content="Skelta" name="keywords">

    <link href="{{ asset('img/icons/favicon.ico') }}" rel="icon" sizes="16x16" type="image/gif">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap CSS -->

    <!-- Fonts-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    {{--google--}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Montserrat|Sofia|Trirong">

    <!-- End Fonts-->


    <!--Theme style-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">


</head>
<body>


@include('partials.navbar')

@yield('content')

@include('partials.footer')



<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->


</body>
</html>
