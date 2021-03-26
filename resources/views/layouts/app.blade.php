<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{url('../assets/images/favicon.png')}}">
  <!-- chartist CSS -->
  <link href="{{url('dist/css/pages/ecommerce.css')}}" rel="stylesheet">
  <!-- page css -->
  <link href="{{url('dist/css/pages/login-register-lock.css')}}" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="{{url('dist/css/style.min.css')}}" rel="stylesheet">
  <!-- CSS Select2-->
  @stack('css_select2')
  @stack('upload_css')

  

</head>

<body class="skin-default fixed-layout">
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label text-danger">La Mega Tienda Turén</p>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    @if(!\Request::is('login') && !\Request::is('register'))
      @include('partial.navbar')
    @endif
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">

      @yield('content')

    </div>
    @if(!\Request::is('login') && !\Request::is('register'))
      @include('partial.footer')
    @endif
  </div>
    <script src="{{url('/assets/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{url('/assets/node_modules/popper/popper.min.js')}}"></script>
    <script src="{{url('/assets/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{url('dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{url('dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{url('dist/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{url('/assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{url('/assets/node_modules/sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{url('dist/js/custom.min.js')}}"></script>
    <script src="{{url('/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });

    </script>
    @stack('scripts_L')
    @stack('scripts_select2')
    @stack('upload_s')
</body>

</html>