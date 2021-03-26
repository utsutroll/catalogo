@extends('layouts.app')

@section('content')
<!-- Navigation -->

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
          <header class="topbar">
            <nav class="navbar navbar-expand-lg navbar-expand-lg bg-dark text-white" style="font-family:'Varela Round', sans-serif;font-size: 16px;">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="text-light ti-menu"></span>
              </button>
  
             <div class="collapse navbar-collapse" id="navbarToggler"> 
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                  <!-- ============================================================== -->
                  <!-- Logo -->
                  <!-- ============================================================== -->
                  <div class="navbar-header bg-dark">
                    <a class="navbar-brand" href="/">
                      <!-- Logo icon -->
                      <span>
                        <!-- dark Logo text -->
                        <img src="../../assets/images/logo-text.png" width="180" height="60" alt="homepage" class="dark-logo" />
                      </span> 
                    </a>
                  </div>
                  <!-- ============================================================== -->
                  <!-- End Logo -->
                  <!-- ============================================================== -->
                </li>
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== 
                <li class="nav-item">
                    <form class="app-search d-none d-md-block d-lg-block">
                      <input type="text" class="form-control" placeholder="Buscar & enter">
                    </form>
                </li>
                 ============================================================== -->
                <!-- End search -->
                <!-- ============================================================== -->
              </ul>
              <!-- ============================================================== -->
              <!-- Items Right -->
              <!-- ============================================================== -->        
              <ul class="navbar-nav mr-0 mt-2 mt-lg-0" style="color: #ffffff !important;" >
                <li class="nav-item">
                  <a class="nav-link" href="about-us">
                    <span>Acerca de nosotros</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/contact">
                    <span>Contáctanos</span>
                  </a>
                </li>
  
                <!-- Authentication Links -->
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    </i> {{ Auth::user()->name }} <i class="caret"></i>
                  </a>
  
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" href="/my-profile">
                      <i class="ti-user"></i> Mi Perfil
                    </a>
  
                    <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="ti-shift-left-alt"></i> {{ __('Cerrar Sesión') }}
                    </a>
                    
  
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </div>
                </li>
                @endguest
              </ul>
             </div>
            </nav>
          </header>
    </div>    
</div><br/><br/><br/><br/><br/>
<div class="conten mt-6">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique su dirección de correo electrónico') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, compruebe su correo electrónico para ver si hay un enlace de verificación.') }}
                    {{ __('Si no ha recibido el correo electrónico') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('haga clic aquí para solicitar otro') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<footer class="footer ml-0 bg-dark text-light">
    © 2021 La Mega Tienda Turén by Space DigitalSolutions C.A
</footer>
@push('css_v')
 <!-- Custom CSS -->
 <link href="dist/css/style.min.css" rel="stylesheet">    
@endpush
@push('s_v')
<script src="../../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="../../assets/node_modules/popper/popper.min.js"></script>
<script src="../../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
@endpush
@endsection

