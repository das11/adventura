<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Cipher Adventure</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('site_assets/css/bootstrap.css') }}" >
    <link rel="stylesheet" href="{{ URL::asset('site_assets/vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('site_assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('site_assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('site_assets/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('site_assets/vendors/nice-select/css/nice-select.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ URL::asset('site_assets/css/style.css') }}">
  </head>


<body>
  


  {{-- @include("tour.header")
    @yield("tourlayout")
  @include("tour.footer") --}}

@include("tour.header")
    @yield("tourlayout")
@include("tour.footer")




  {{-- Script Imports --}}

	<script src="{{ URL::asset('site_assets/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ URL::asset('site_assets/js/popper.js') }}"></script>
	<script src="{{ URL::asset('site_assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('site_assets/js/stellar.js') }}"></script>
	<script src="{{ URL::asset('site_assets/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ URL::asset('site_assets/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ URL::asset('site_assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
	<script src="{{ URL::asset('site_assets/js/owl-carousel-thumb.min.js') }}"></script>
	<script src="{{ URL::asset('site_assets/js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ URL::asset('site_assets/js/mail-script.js') }}"></script>
  
  <!--gmaps Js-->
  {{-- <script src="{{ URL::asset('site_assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE') }}"></script> --}}
  
	<script src="{{ URL::asset('site_assets/js/gmaps.min.js') }}"></script>
	<script src="{{ URL::asset('site_assets/js/theme.js') }}"></script>

    
</body>
</html>