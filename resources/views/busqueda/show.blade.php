@extends('layouts.app')

@section('title', 'Resultados de búsqueda')

@section('body-class', 'profile-page')

@section('styles')
    <style>
        .team {
            padding-bottom: 50px;
        }
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
    </style>
@endsection

@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/img3.jpg') }}');"></div>

<div class="main main-raised">
    <div class="profile-content">
        <div class="container">
            <div class="row">
                <div class="profile">
                    <div class="avatar">
                        <img src="/img/search.png" alt="lupa que representa la página de resultados" class="img-circle img-responsive img-raised">
                    </div>

                    <div class="name">
                        <h3 class="title">Resultados de búsqueda</h3>
                    </div>

                    
                    @if (session('notification'))
                        <div class="alert alert-success">
                            {{ session('notification') }}
                        </div>
                    @endif
                </div>
            </div>
            

            <div class="team text-center">
                <div class="row">
                    
       

                    <div class="card" style="width: 45rem;">



                          <img class="card-img-top" src="../storage/logo1.jpg" alt="Doctor">


                          <div class="card-body">
                            <h5 class="card-title">{{$doctore->nombre}} {{$doctore->apellidos}} </h5><hr>
                            <p class="card-text">{{$doctore->especialidad->nombre}}</p>
                             <img src="{{ url('/storage/logo1.jpg') }}" alt="Docto" title="asdf" />  
                             <img src="{{ asset('/storage/'.$doctore->image) }}" alt="Doc" title="asdf"></a>
                             <img class="card-img-top" src="{{ route('doctor.avatar',['filename'=>$doctore->image]) }}" alt="Doctor">

                             <img src="<?php echo asset("/storage/$doctore->image")?>"></img>


                             <a href="{{ url('/pedircita/'.$doctore->id) }}" class="btn btn-primary">Pedir Cita</a>
                          </div>
                    </div>
                                 
                        
                
            
            </div>

        </div>
    </div>
</div> 

@include('includes.footer')
@endsection
