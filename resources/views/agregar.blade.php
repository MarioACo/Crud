@extends('layout.plantilla')

@section('Crear Usuario','Crear nuevo registro')

@section('contenido')
<div class="row">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-header">
                Agregar nueva persona
            </div>
            <div class="card-body">
                <p class="card-text">
                    <form action="{{ route('personas.store') }}" method="POST">
                        @csrf
                        <label for="">Apellido Paterno</label>
                        <input type="text" name="paterno" class="form-control" required>
                        <label for="">Apellido Materno</label>
                        <input type="text" name="materno" class="form-control" required>
                        <label for="">Nombre</label>
                        <input type="text" name="nombre" class="form-control" required>
                        <label for="">Fecha de nacimiento</label>
                        <input type="date" name="fecha_nacimiento" class="form-control" required>
                        <div class="row mt-4">
                            <div class="col-6">
                                <a class="btn btn-outline-info" href="{{ route('personas.index') }}">
                                <i class="fa-solid fa-arrow-rotate-left"></i> Regresar al inicio</a>
                                
                            </div>
                            <div class="col-6">
                                <button class="btn btn-outline-primary">
                                <i class="fa-solid fa-user-plus"></i>Agregar Nueva Persona</button>
                            </div>
                        </div>
                            
                    </form>
                </p>               
            </div>
        </div>
    </div>
</div>

@endsection
