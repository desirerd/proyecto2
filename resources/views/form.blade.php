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
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <li><a href="{{ route('register') }}">TRATAMIENTOS</a></li>
                            <li><a href="{{ route('register') }}">TARIFAS</a></li>
                            <li><a href="{{ route('register') }}">INSTALACIONES</a></li>
                            <li><a href="{{ route('register') }}">CONTACTO</a></li> 
                            <ul class="dropdown-menu" role="menu">
                               
                                @if (auth()->user()->admin)
                                <li>
                                    <a href="{{ url('/admin/pacientes') }}">Gestionar pacientes</a>
                                </li>
                                <li>
                                    <a href="{{ url('/admin/diagnosticos') }}">Gestionar diagnosticos</a>
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
                    @endguest
                </ul>
            </div>
        </div>



  <!--</div>-->



<body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <!--<img class="d-block mx-auto mb-4" src="" alt="" width="72" height="72">-->
        <h2>Formulario de Contacto </h2>
        <p class="lead">Escríbenos y te responderemos lo antes posible.</p>
      </div>

      <div class="row">
       
        <div class="col-md-12 order-md-1">
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Nombre</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Nombre es requerido
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Apellidos</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Apellido es requerido
                </div>
              </div>
            </div>


            <div class="mb-3">
              <label for="email">Email <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" placeholder="" required>
              <div class="invalid-feedback">
                Por favor introduce un email válido
              </div>
            </div>

            <div class="mb-3">
              <label for="tlf">Teléfono <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="tlf" placeholder="" required>
              <div class="invalid-feedback">
                Por favor introduce un teléfono válido
              </div>
            </div>

            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Acepto la política de privacidad</label>
            </div>
            
            <hr class="mb-4">

        
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar</button>
          </form>
        </div>
      </div>

     @include('includes.footer')
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
