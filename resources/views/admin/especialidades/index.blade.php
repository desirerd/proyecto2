@extends('layouts.app')

@section('title', 'Listado de pacientes')

@section('body-class', 'product-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/img3.jpg') }}');">
</div>

<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
            <h2 class="title">Listado de especialidades</h2>

            <div class="team">
                <div class="row">
                    <a href="{{ url('/admin/especialidades/create') }}" class="btn btn-primary btn-round">Nueva Especialidad</a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col-md-2 text-center">Nombre</th>
                                <th class="text-right">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($especialidades as $key => $especialidad)
                            <tr>
                                <td>{{ $especialidad->nombre }}</td>
                                
                                
                                <td class="td-actions text-right">
                                    <form method="post" action="{{ url('/admin/especialidades/'.$especialidad->id) }}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        
                                        <a href="{{ url('/especialidaes/'.$especialidad->id) }}" rel="tooltip" title="Ficha Especialidad" class="btn btn-info btn-simple btn-xs">
                                            <i class="fa fa-info"></i>
                                        </a>
                                        <a href="{{ url('/admin/especialidades/'.$especialidad->id.'/edit') }}" rel="tooltip" title="Editar especialidad" class="btn btn-success btn-simple btn-xs">
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

                    {{ $especialidades->links() }}
                </div>
            </div>
        </div>
    </div>

</div>

@include('includes.footer')
@endsection
