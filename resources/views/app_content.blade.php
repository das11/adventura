<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="Content-Type"content="text/html;charset=UTF-8"/>
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    
    {{-- <title>@yield('head_title',config('site_name'))</title> --}}

    <title>KK-idishoom</title>
    <!-- <meta name="description" content="@yield('head_description',config('site_description'))" /> -->
    <meta name="description" content="gentledental.care is a online platform to find & book appointments with dentist near you.
          Diagnose yourself with our free dental checker and get the best dental consultant in your area." />

    <meta property="og:type" content="article" />
    <meta property="og:title" content="@yield('head_title', config('site_name'))" />
    <meta property="og:description" content="@yield('head_description',config('site_description'))" />
    <meta property="og:image" content="@yield('head_image', url('/upload/main_logo.png'))" />
    <meta property="og:url" content="@yield('head_url', url('/'))" />

    {{-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('site_assets/css/style.css') }}"> --}}
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> --}}
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"> --}}
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
    <link rel="shortcut icon" href="{{ URL::asset('upload/'.config('site_favicon')) }}" type="image/x-icon">
    
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/css/bootstrap4-toggle.min.css" rel="stylesheet">
    {{-- idishum css --}}
    <link rel="stylesheet" href="{{ URL::asset('site_assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('') }}site_assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{ URL::asset('site_assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('site_assets/vendors/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('site_assets/vendors/animate-css/animate.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('site_assets/vendors/popup/magnific-popup.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ URL::asset('site_assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('site_assets/css/responsive.css') }}">
   



</head>
<body>
  
  
  @include("idishum_pages.idishumnav")


  @yield("idishumcontent")

  @include("idishum_pages.idishumfooter")




  

  {{-- @include("_particles.header") --}}
  {{-- @include("_particles.body") --}}
  {{--   @include("_particles.menulisting")   --}}
     {{-- @include("_particles.header") --}}
 
    {{--     
    
      @yield("content")

      @include("_particles.footer") 
    
    --}}


    










{{-- Script Imports --}}

 
{{-- <!-- <script src="{{ URL::asset('site_assets/js/jquery.min.js') }}"></script>

<script src="{{ URL::asset('site_assets/js/bootstrap.min.js') }}"></script> 
<script src="{{ URL::asset('site_assets/js/nav.js') }}"></script> 
<script type="text/javascript" src="{{ URL::asset('site_assets/js/bootstrap-select.js') }}"></script> 
<script src="{{ URL::asset('site_assets/js/owl.carousel.min.js') }}"></script> 
<script type="text/javascript" src="{{ URL::asset('site_assets/js/thumbnail-slider.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('site_assets/js/slider.js') }}"></script> 
<script type="text/javascript" src="{{ URL::asset('site_assets/js/testimonial.js') }}"></script> 
<script src="{{ URL::asset('site_assets/js/jquery.sticky.js') }}"></script> 
<script src="{{ URL::asset('site_assets/js/header-sticky.js') }}"></script> --> --}}


{{-- 
<!-- @if(!classActivePathSite('submit_listing'))Page Plugins -->
<!-- <script src="{{ URL::asset('site_assets/js/fileinput.min.js') }}"></script>
<script src="{{ URL::asset('site_assets/js/superlist.js') }}"></script> -->
<!-- @endif -->

<!--<script src="{{ URL::asset('site_assets/js/fileinput.min.js') }}"></script>
<script src="{{ URL::asset('site_assets/js/jquery.colorbox-min.js') }}"></script>
<script src="{{ URL::asset('site_assets/js/superlist.js') }}"></script>--> --}}

  <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ URL::asset('site_assets/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ URL::asset('site_assets/js/popper.js') }} "></script>
    <script src="{{ URL::asset('site_assets/js/bootstrap.min.js') }} "></script>
    <script src="{{ URL::asset('site_assets/js/stellar.js') }} "></script>
    <script src="{{ URL::asset('site_assets/vendors/popup/jquery.magnific-popup.min.js') }} "></script>
    <script src="{{ URL::asset('site_assets/js/jquery.ajaxchimp.min.js') }} "></script>
    <script src="{{ URL::asset('site_assets/js/waypoints.min.js') }} "></script>
    <script src="{{ URL::asset('site_assets/js/mail-script.js') }}"></script>
    <script src="{{ URL::asset('site_assets/js/contact.js') }}"></script>
    <script src="{{ URL::asset('site_assets/js/jquery.form.js') }}"></script>
    <script src="{{ URL::asset('site_assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ URL::asset('site_assets/js/mail-script.js') }}"></script>
    <script src="{{ URL::asset('site_assets/js/theme.js') }}"></script>
    <script src="{{ URL::asset('site_assets/js/preview.js') }}"></script>

    
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.4.0/js/bootstrap4-toggle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>