@extends('layouts.app')

@section('body-class', 'product-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/city.jpg') }}');">
</div>

<div class="main main-raised">
    <div class="container">

        <div class="section">
            <h2 class="title text-center">Nueva especialidad</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{ url('/admin/especialidades') }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Nombre de la especialidad</label>
                            <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
                        </div>
                    </div>
                    
                </div>

                
                <button class="btn btn-primary">Registrar especialidad</button>
                <a href="{{ url('/admin/especialidades') }}" class="btn btn-default">Cancelar</a>
            </form>
        </div>

    </div>
</div>

@include('includes.footer')
@endsection
