<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Xipaar</title>
    <link rel="icon" href="site_assets/img/favicon.png" />
    {{-- <link rel="shortcut icon" href="{{ URL::asset('site_assets/img/'.config('site_favicon')) }}" type="image/x-icon"> --}}
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('site_assets/css/bootstrap.min.css') }}" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ URL::asset('site_assets/css/animate.css') }}" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ URL::asset('site_assets/css/owl.carousel.min.css') }}" />
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ URL::asset('site_assets/css/themify-icons.css') }}" />
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('site_assets/css/flaticon.css') }}" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('site_assets/css/magnific-popup.css') }}" />
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ URL::asset('site_assets/css/slick.css') }}" />
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ URL::asset('site_assets/css/style.css') }}" />

    <link rel="stylesheet" href="{{ URL::asset('site_assets/niceselect/css/nice-select.css') }}" />

   
  </head>
  <body>



  @include("_particles.header")
    @yield('content')
  @include("_particles.footer")






  
     <!-- jquery plugins here-->

       <script src="https://use.fontawesome.com/d8775d5df2.js"></script>
    <script src="{{ URL::asset('site_assets/js/jquery-1.12.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ URL::asset('site_assets/js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ URL::asset('site_assets/js/bootstrap.min.js') }}"></script>
    <!-- easing js -->
    <script src="{{ URL::asset('site_assets/js/jquery.magnific-popup.js') }}"></script>
    <!-- isotope js -->
    <script src="{{ URL::asset('site_assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- particles js -->
    <script src="{{ URL::asset('site_assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('site_assets/js/jquery.nice-select.min.js') }}"></script>
    <!-- custom js -->
    <script src="{{ URL::asset('site_assets/js/custom.js') }}"></script>
    <!--register js-->
    {{-- <script src="{{ URL::asset('site_assets/js/contact.js') }}"></script> --}}
    <script src="{{ URL::asset('site_assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ URL::asset('site_assets/js/jquery.form.js') }}"></script>
    <script src="{{ URL::asset('site_assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ URL::asset('site_assets/js/mail-script.js') }}"></script>
    <!-- register js -->

    <script src="{{ URL::asset('site_assets/niceselect/js/jquery.nice-select.js') }}"></script>

  </body>
</html>