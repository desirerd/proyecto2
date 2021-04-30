@extends('layouts.app')

@section('body-class', 'product-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/img3.jpg') }}');">
</div>

<div class="main main-raised">
    <div class="container">

        <div class="section">
            <h2 class="title text-center">Alta Doctor</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{ url('/admin/doctores') }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="row">

                    <div class="col-sm-6">
                         <div class="form-group label-floating">
                            <label class="control-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}"> 
                        </div>
                    </div>

                    <div class="col-sm-6">
                         <div class="form-group label-floating">
                            <label class="control-label">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" value="{{ old('apellidos') }}"> 
                        </div>
                    </div>

                    <div class="col-sm-6">
                         <div class="form-group label-floating">
                            <label class="control-label">Descripción</label>
                            <input type="text" class="form-control" name="description" value="{{ old('description') }}"> 
                        </div>
                    </div>

                            <label class="control-label">Imagen</label>
                          
                            <input id="file-input" name="image_path" type="file"/>
                       
                    </div>

                    

                    <<div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Especialidad</label>
                            <select class="form-control" name="especialidad_id">
                                <option value="0">Elige Especialidad</option>
                                @foreach ($especialidades as $especialidad)
                                <option value="{{ $especialidad->id }}">{{ $especialidad->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

            
                <button class="btn btn-primary">Guardar doctor</button>
                <a href="{{ url('/admin/diagnosticos') }}" class="btn btn-default">Cancelar</a>
            </form>
        </div>

    </div>
</div>

@include('includes.footer')
@endsection
