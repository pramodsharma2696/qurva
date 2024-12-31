<!DOCTYPE html>
<html lang="zxx">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Qurva</title>
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('') }}uploads/logo.png">
    <!--bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/css/bootstrap.min.css">
    <!--owl carousel css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/css/owl.carousel.min.css">
    <!--magnific popup css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/css/magnific-popup.css">
    <!--font awesome css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/css/font-awesome.min.css">
    <!--meanmenu css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/css/meanmenu.css">
    <!--animate css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/css/animate.css">
    <!--main css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/css/style.css">
    <!--responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/css/responsive.css">
</head>

<body>
     

@include('body.header')


@yield('contents')

@include('body.footer')

 <!--jQuery js-->
 <script src="{{ asset('') }}assets/js/jquery-3.3.1.min.js"></script>
    <!--proper js-->
    <script src="{{ asset('') }}assets/js/popper.min.js"></script>
    <!--bootstrap js-->
    <script src="{{ asset('') }}assets/js/bootstrap.min.js"></script>
    <!--mainmenu js-->
    <script src="{{ asset('') }}assets/js/meanmenu.min.js"></script>
    <!--counterup js-->
    <script src="{{ asset('') }}assets/js/counterup.min.js"></script>
    <!--waypoints js-->
    <script src="{{ asset('') }}assets/js/waypoints.js"></script>
    <!--magnic popup js-->
    <script src="{{ asset('') }}assets/js/magnific-popup.min.js"></script>
    <!--owl carousel js-->
    <script src="{{ asset('') }}assets/js/owl.carousel.min.js"></script>
    <!--syotimer js-->
    <script src="{{ asset('') }}assets/js/syotimer.min.js"></script>
    <!--main js-->
    <script src="{{ asset('') }}assets/js/custom.js"></script>
</body>
 
</html>