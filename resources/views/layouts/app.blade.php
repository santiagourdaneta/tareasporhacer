<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Tareas por hacer</title>

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
        <a class="navbar-brand" href="{{ route('home') }}">
          <span><img src="{{ asset('/uploads/brand/brand-ico.png') }}" alt="" style="margin-top: -10px; width: 35px;"></span>
          <span>Tareas por hacer</span>
        </a>
      </div>

      <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <!-- Left Side Of Navbar -->
        {{-- <ul class="nav navbar-nav"> --}}
        {{-- &nbsp; --}}
        {{-- </ul> --}}

       
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
    <small><center>Tareas por hacer</center></small>
  </p>
</footer>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
