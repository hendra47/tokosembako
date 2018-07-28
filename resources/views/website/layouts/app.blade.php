<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PO Dewi Sri</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('theme_web/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="{{ asset('theme_web/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme_web/vendor/simple-line-icons/css/simple-line-icons.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('theme_web/css/new-age.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme_web/css/new-css.css') }}" rel="stylesheet">

  </head>

  <body id="page-top">
  @extends('website.layouts.menu')
   
  @yield('contentdata')

  @extends('website.layouts.footer')


    <!-- Bootstrap core JavaScript{{ asset('theme_web/vendor/jquery/jquery.min.js') }}" -->
    <script src="{{ asset('theme_web/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('theme_web/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('theme_web/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('theme_web/js/new-age.min.js') }}"></script>

  </body>

</html>
