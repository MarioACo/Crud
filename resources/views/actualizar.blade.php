@extends('layout.plantilla')

@section('Actualizar Persona','Actualiza la persona seleccionada')

@section('contenido')
<div class="row">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-header">
                Actualizar persona
            </div>
            <div class="card-body">
                <p class="card-text">
                    <form action="{{ route('personas.update', $personas->id) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <label for="">Apellido Paterno</label>
                        <input type="text" name="paterno" class="form-control" required value="{{$personas->paterno}}">
                        <label for="">Apellido Materno</label>
                        <input type="text" name="materno" class="form-control" required value="{{$personas->materno}}">
                        <label for="">Nombre</label>
                        <input type="text" name="nombre" class="form-control" required value="{{$personas->nombre}}">
                        <label for="">Fecha de nacimiento</label>
                        <input type="date" name="fecha_nacimiento" class="form-control" required value="{{$personas->fecha_nacimiento}}">
                        <div class="row mt-4">
                            <div class="col-6">
                                <a class="btn btn-outline-info" href="{{ route('personas.index') }}">
                                <i class="fa-solid fa-arrow-rotate-left"></i> Regresar al inicio</a>
                                
                            </div>
                            <div class="col-6">
                                <button class="btn btn-outline-warning">
                                <i class="fa-solid fa-user-pen"></i>Actualizar persona</button>
                            </div>
                        </div>
                            
                    </form>
                </p>               
            </div>
        </div>
    </div>
</div>

@endsection
