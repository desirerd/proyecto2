@extends('layouts.app')

@section('body-class', 'product-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/img3.jpg') }}');">
</div>

<div class="main main-raised">
    <div class="container">

        <div class="section">
            <h2 class="title text-center">Pide tu Cita con el doctor :<br><b> {{$doctor->nombre}} {{ $doctor->apellidos}} </b></h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action={{route('contact')}} enctype="multipart/form-data">
                {{ csrf_field() }}


                <div class="row">

                    <div class="col-sm-6">
                         <div class="form-group label-floating">
                            <label class="control-label">Nombre</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required> 
                        </div>
                    </div>

                    <div class="col-sm-6">
                         <div class="form-group label-floating">
                            <label class="control-label">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" value="{{ old('apellidos') }}" required> 
                        </div>
                    </div>

                    <div class="col-sm-6">
                         <div class="form-group label-floating">
                            <label class="control-label">Teléfono</label>
                            <input type="number" class="form-control" name="telefono" value="{{ old('telefono') }}" required> 
                        </div>
                    </div>

                    <div class="col-sm-6">
                         <div class="form-group label-floating">
                            <label class="control-label">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" required> 
                        </div>
                    </div>

                

                          <input name="invisible" type="hidden" value="{{$doctor->nombre}}">
                           <input name="invisible2" type="hidden" value="{{$doctor->apellidos}}">
                           
                       
                    </div>

                
                </div>

            
                <button type="submit" class="btn btn-primary">Pedir Cita</button>
                <a href="{{ url('citas') }}" class="btn btn-default">Cancelar</a>
            </form>
        </div>

    </div>
</div>

@include('includes.footer')
@endsection
