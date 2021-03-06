@extends('layouts.app')

@section('title', 'Bienvenido a ' . config('app.name'))

@section('body-class', 'landing-page')

@section('styles')
    <style>
        .team .row .col-md-4 {
            margin-bottom: 5em;
        }
        .team .row {
          display: -webkit-box;
          display: -webkit-flex;
          display: -ms-flexbox;
          display:         flex;
          flex-wrap: wrap;
        }
        .team .row > [class*='col-'] {
          display: flex;
          flex-direction: column;
        }

        .tt-query {
          -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
             -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
                  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        }

        .tt-hint {
          color: #999
        }

        .tt-menu {    /* used to be tt-dropdown-menu in older versions */
          width: 222px;
          margin-top: 4px;
          padding: 4px 0;
          background-color: #fff;
          border: 1px solid #ccc;
          border: 1px solid rgba(0, 0, 0, 0.2);
          -webkit-border-radius: 4px;
             -moz-border-radius: 4px;
                  border-radius: 4px;
          -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
             -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
                  box-shadow: 0 5px 10px rgba(0,0,0,.2);
        }

        .tt-suggestion {
          padding: 3px 20px;
          line-height: 24px;
        }

        .tt-suggestion.tt-cursor,.tt-suggestion:hover {
          color: #fff;
          background-color: #0097cf;

        }

        .tt-suggestion p {
          margin: 0;
        }
    </style>
@endsection

@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('/img/img3.jpg') }}');margin-top:20px">
    <div class="container">
        <div class="row">
            
             
               <!-- <img src="{{ asset('/img/laravel.png') }}" alt="Gestor API" width="300">
                <h1 class="title">Bienvenido a {{ config('app.name') }}.</h1>
                <h4> Prueba t??cnica API - Entrevista</h4> -->
                
          
        </div>
    </div>
</div>


<center><div class="jumbotron" style="background-color:#fff">
  <h4 class="display-4">Nuestros m??dicos mejor valorados </h4>
 
<form  method="post" action="{{ url('/buscar') }}">
     {{ csrf_field() }}

  <select name="especialidad" class="custom-select">
    <option selected>Selecciona especialidad..</option>
    
            @foreach ($especialidades as $item)
            <option value="{{$item->id}}">{{$item->nombre}}</option>
            @endforeach
  </select>
  <div class="input-group-append">
    
<button class="btn btn-primary">Buscar</button>
  </div>
</div>
    
 </form> 


   

</div>
<div class="main main-raised">
    <div class="container">
      <div class="row">
        <div class="col-3">
         
              <div class="card" style="width: 25rem;">
                <img src="../img/usuario.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
 

        </div>
        <div class="col-3">
            <div class="card" style="width: 25rem;">
              <img src="../img/marc.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>

        </div>

        <div class="col-3">
               <div class="card" style="width: 25rem;">
            <img src="../img/christian.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>

        <div class="col-3">
         
              <div class="card" style="width: 25rem;">
                  <img src="../img/usuario.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
            </div>
 
        </div>
      </div>
  </div>
</div>
  

  </div> 

        <div class="section landing-section">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-center title">Reg??strate para gestionar el API </h2>
                    <h4 class="text-center description">Reg??strate ingresando tus datos b??sicos, y podr??s realizar la gesti??n de pacientes y diagn??sticos como administrador.</h4>
                    <!--<form class="contact-form" method="get" action="{{ url('/register') }}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Nombre</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Correo electr??nico</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>
                        </div>

                    

                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 text-center">
                                <button class="btn btn-primary btn-raised">
                                    Iniciar registro
                                </button>
                            </div>
                        </div>
                    </form>-->
                </div>
            </div>

        </div>
    </div>
</div>

@include('includes.footer')
@endsection

@section('scripts')
    <script src="{{ asset('/js/typeahead.bundle.min.js') }}"></script>
    <script>
        $(function () {
            // 
            var products = new Bloodhound({
              datumTokenizer: Bloodhound.tokenizers.whitespace,
              queryTokenizer: Bloodhound.tokenizers.whitespace,
              prefetch: '{{ url("/products/json") }}'
            });            

            // inicializar typeahead sobre nuestro input de b??squeda
            $('#search').typeahead({
                hint: true,
                highlight: true,
                minLength: 1
            }, {
                name: 'products',
                source: products
            });
        });
    </script>
@endsection
