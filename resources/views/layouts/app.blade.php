<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Batcave</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- Branding Image -->
        <a class="navbar-brand" href="{{ asset('storage/app/public/brand/brand-ico.png') }}">
          <span><img src="{{ asset('/uploads/brand/brand-ico.png') }}" alt="" style="margin-top: -10px; width: 35px;"></span>
          <span>BatCave</span>
        </a>
      </div>

      <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <!-- Left Side Of Navbar -->
        {{-- <ul class="nav navbar-nav"> --}}
        {{-- &nbsp; --}}
        {{-- </ul> --}}

        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
          <!-- Authentication Links -->
          @if (Auth::guest())
          <li><a href="{{ route('login') }}">Sign in</a></li>
          @else
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position: relative; padding-left: 50px;">
              <img src="uploads/avatars/{{ Auth::user()->avatar }}" alt="" style="width: 32px; height: 32px; position: absolute; top:10px; left: 10px; border-radius: 50%">
              {{ Auth::user()->username }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="{{ url('/profile') }}">Mi perfil</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Cerrar sesión
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="container">            
    @yield('content')
  </div>        
</div>


<footer style="background-color: #F2F2F2;" class="footer-aplication">
  <p>
    <small><center>&copy; 2017 Laravel</center></small>
  </p>
</footer>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
