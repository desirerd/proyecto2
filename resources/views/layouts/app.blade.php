<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>@yield('title', config('app.name'))</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/material-kit.css') }}" rel="stylesheet"/>
    @yield('styles')
</head>

<body class="@yield('body-class')">

<!--<div class="wrapper bg-light text-dark">-->



<div class="navbar navbar-expand-lg navbar navbar-dark" style="background-color: #fff; color:#000">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">Gestor Diagnostico Pacientes</a>
            </div>

            <div class="collapse navbar-collapse" id="navigation-example">
                <ul class="nav navbar-nav navbar-right">
                    @guest
                        
                        <li><a href="{{ route('register') }}">TRATAMIENTOS</a></li>
                        <li><a href="{{ route('register') }}">TARIFAS</a></li>
                        <li><a href="{{ route('register') }}">INSTALACIONES</a></li>
                        <li><a href="{{ route('register') }}">CONTACTO</a></li> 
                        <li><a href="{{ route('login') }}">LOGIN</a></li>
                        <li><a href="{{ route('register') }}">REGISTRO</a></li>
                    @else
                    
                         <li><a href="{{ route('register') }}">TRATAMIENTOS</a></li>
                            <li><a href="{{ route('register') }}">TARIFAS</a></li>
                            <li><a href="{{ route('register') }}">INSTALACIONES</a></li>
                            <li><a href="{{ route('register') }}">CONTACTO</a></li> 
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                               
                                @if (auth()->user()->admin)
                                <li>
                                    <a href="{{ url('/admin/pacientes') }}">Gestionar pacientes</a>
                                </li>
                                <li>
                                    <a href="{{ url('/admin/diagnosticos') }}">Gestionar diagnosticos</a>
                                </li>
                                <li>
                                    <a href="{{ url('/admin/doctores') }}">Gestionar Doctores</a>
                                </li>
                                <li>
                                    <a href="{{ url('/admin/especialidades') }}">Gestionar Especialidades</a>
                                </li>
                                @endif
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Cerrar sesión
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                            </ul>
                       
                    @endguest
                
            </div>
        </div>


  <!--</div>-->





<div class="wrapper bg-light text-dark" style="margin-bottom: 3px;">

    <div class="container">
      <div class="row">
        <div class="col-4">
         
         <h5 class="card-title"> <i class="fa fa-comments fa-2x">&nbsp;&nbsp;</i>Escríbenos: +12398176</h5>
    <p class="card-text">C/ Proyecto prueba, 5, 28030. Madrid .</p>
 

        </div>
        <div class="col-4">
          <h5 class="card-title"><i class="fa fa-phone fa-2x">&nbsp;&nbsp;</i>Contáctanos: +239647346</h5>
    <p class="card-text">Lunes-Viernes: 09:00h a 19:00h.</p>
        </div>
        <div class="col-4 bg-primary">
          


    


          <a href="{{ url('/citas') }}"><h5 class="card-title "><i class="fa fa-calendar fa-2x">&nbsp;&nbsp;</i>Pide Cita</h5></a>
     <a href="{{ url('/citas') }}"><p class="card-text"><font color="#fff">Deja tus datos y nosotros te llamaremos</font></p></a>
        </div>
      </div>
  
    </div>
   
        @yield('content')
</div>
<center><footer class="bd-footer text-muted">
  <div class="container-col-12">
    <ul class="bd-footer-links">
      <li><a href="{{ route('register') }}">GitHub</a></li>
      <li><a href="https://twitter.com/getbootstrap">Twitter</a></li>
      <li><a href="{{ route('register') }}">Examples</a></li>
      <li><a href="{{ route('register') }}">About</a></li>
    </ul>
    <p>Designed and built with all the love in the world by .</p>
    <p>Currently 2021 Code licensed.</p>
  </div>
</footer></center>
</body>

    <!--   Core JS Files   -->
    <script src="{{ asset('/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/material.min.js') }}"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('/js/nouislider.min.js') }}" type="text/javascript"></script>

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="{{ asset('/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="{{ asset('/js/material-kit.js') }}" type="text/javascript"></script>
    @yield('scripts')

</html>
