@extends('layouts.app')

@section('title', 'Listado de productos')

@section('body-class', 'product-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/img3.jpg') }}');">
</div>

<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title">Listado de doctores</h2>

            <div class="team">
                <div class="row">
                    <a href="{{ url('/admin/doctores/create') }}" class="btn btn-primary btn-round">Nuevo doctor</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">Nombre</th>  
                                <th class="text-center">Apellidos</th>  
                                <th class="col-md-5 text-center">Descripción</th>
                                <th class="text-center">Especialidad</th>

                                <th class="text-right">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($doctores as $doctor)
                            <tr>
                                <td class="text-center">{{ $doctor->nombre }}</td>
                                <td>{{ $doctor->apellidos }}</td>
                                <td>{{ $doctor->description }}</td>
                                 <td>{{ $doctor->especialidad->nombre }}</td>

                           
                                <td class="td-actions text-right">
                                    <form method="post" action="{{ url('/admin/doctores/'.$doctor->id) }}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        
                                        <a href="{{ url('/doctores/'.$doctor->id) }}" rel="tooltip" title="Ver doctor" class="btn btn-info btn-simple btn-xs" target="_blank">
                                            <i class="fa fa-info"></i>
                                        </a>
                                        <a href="{{ url('/admin/doctores/'.$doctor->id.'/edit') }}" rel="tooltip" title="Editar doctor" class="btn btn-success btn-simple btn-xs">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                       
                                        <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </form>                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $doctores->links() }}
                </div>
            </div>
        </div>
    </div>

</div>

@include('includes.footer')
@endsection
