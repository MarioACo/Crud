@extends('layout.plantilla')

@section('Crear Usuario','Crear nuevo registro')

@section('contenido')
<div class="row">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-header">
                Eliminar una Persona
            </div>
            <div class="card-body">
                <p class="card-text">
                    <div class="alert alert-danger" role="alert">
                        Estas seguro de eliminar este registro

                        <table class="table table-sm table-hover table-bordered" style="background-color: white">
                            <thead>
                                <th>Apellido paterno</th>
                                <th>Apellido materno</th>
                                <th>Nombre</th>
                                <th>Fecha de nacimiento</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$personas->paterno}}</td>
                                    <td>{{$personas->materno}}</td>
                                    <td>{{$personas->nombre}}</td>
                                    <td>{{$personas->fecha_nacimiento}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <form action="{{ route('personas.destroy', $personas->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('personas.index')}}" class="btn btn-outline-info">
                            <i class="fa-solid fa-arrow-rotate-left"></i> Regresar</a>
                            <button class="btn btn-outline-danger">
                            <i class="fa-regular fa-trash-can"></i>Eliminar Persona</button>
                        </form>
                    </div>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
