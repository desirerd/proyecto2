<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

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
  @if(session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif


<body class="bg-light">
<div style="background-image: url('{{ asset('/img/clinic.png') }}');background-repeat: no-repeat;margin-top:20px;height:630px;position:relative;">
<div class="display-4" style="position:absolute;bottom:5px;right:10px;">
  <!--<h5><b>Pide cita médica online</b></h5>
  <h5><b> con los mejores médicos</b></h5>-->

  
  <hr class="my-4">
  <div>

  <form method="post" action="{{ url('/listadodoctores') }}" enctype="multipart/form-data">
     {{ csrf_field() }}
     <select name="especialidad" id="_especialidad">
            <option value="">Selecciona Especialidad </option>
            @foreach ($especialidades as $item)
            <option value="{{$item->id}}">{{$item->nombre}}</option>
            @endforeach
        </select>
        <select name="doctor" id="_doctor"></select>
        
    </div>
<script>
    const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
    document.getElementById('_especialidad').addEventListener('change',(e)=>{
        fetch('doctors',{
            method : 'POST',
            body: JSON.stringify({texto : e.target.value}),
            headers:{
                'Content-Type': 'application/json',
                "X-CSRF-Token": csrfToken
            }
        }).then(response =>{
            return response.json()
        }).then( data =>{
            var opciones ="<option value=''>Elige Doctor</option>";
            for (let i in data.lista) {
               opciones+= '<option value="'+data.lista[i].id+'">'+data.lista[i].nombre+'</option>';
            }
            document.getElementById("_doctor").innerHTML = opciones;
        }).catch(error =>console.error(error));
    })

</script>  

<button class="btn btn-primary">Enviar</button>
            
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
