<header class="topbar">
  <nav class="navbar navbar-expand-lg navbar-expand-lg bg-light" style="font-family: 'Roboto', sans-serif;font-size: 14px;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="text-light ti-menu"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarToggler"> 
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <!-- ============================================================== -->
          <!-- Logo -->
          <!-- ============================================================== -->
          <div class="navbar-header">
            <a class="navbar-brand" href="/">
              <!-- Logo icon -->
              <span>
                <!-- dark Logo text -->
                <img src="{{url('assets/images/logo-text-red-black.png')}}" width="100" height="40" alt="homepage" class="dark-logo" />
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
      <ul class="navbar-nav mr-0 mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/">
            <span>Inicio</span>
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
            <a class="dropdown-item" href="/my-orders">
              <i class="ti-bag"></i> Mis pedidos
            </a>
            <a class="dropdown-item" href="/my-profile">
              <i class="ti-user"></i> Mi Perfil
            </a>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              <i class="ti-shift-left-alt"></i> {{ __('Cerrar Sesión') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
        @endguest
      </ul>
      <a class="nav-link" href="/shopping-cart"><i class="fa fa-shopping-cart fa-2x"></i></a>
    </div>
  </nav>
</header>  