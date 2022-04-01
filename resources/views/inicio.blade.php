@extends('layout.plantilla');

@section('tituloPagina', 'Crud con laravel 8')

@section('contenido')
<div class="row">
    <div class="col-12 mt-5">
        <div class="card">
            <h5 class="card-header">Crud Con Laravel 8 y Mysql</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        @if($mensaje = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{ $mensaje }}
                        </div>
                        @endif
                    </div>
                </div>
                <h5 class="card-title text-center">Listado de Personas en el sistema</h5>
                <p>
                    <a href="{{ route('personas.create') }}" class="btn btn-outline-primary">
                        <i class="fa-solid fa-user-plus"></i> Agregar Nueva Persona</a>
                </p>
                <hr>
                <p class="card-text">
                    <div class="table table-responsive">
                        <table class="table table-sm table-bordered">
                            <thead>
                                <th>Apellido paterno</th>
                                <th>Apellido materno</th>
                                <th>Nombre</th>
                                <th>Fecha nacimiento</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </thead>
                            <tbody>
                                @foreach($datos as $item)
                                <tr>
                                    <td>{{$item->paterno}}</td>
                                    <td>{{$item->materno}}</td>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->fecha_nacimiento}}</td>
                                    <td>
                                        <form action="{{ route('personas.edit', $item->id) }}" method = "GET">
                                            <button class="btn btn-outline-warning btn-sm">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('personas.show', $item->id) }}" method = "GET">
                                            <button class="btn btn-outline-danger btn-sm">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <hr>
                        
                    </div>
                    <div class="row">
                            <div class="col-sm-12">
                                <!-- Muestra la paginacion-->
                                {{ $datos->links() }}
                            </div>
                        </div>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
