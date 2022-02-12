@extends('adminlte::page')

@section('title', 'Modificar Pacietne')

@section('content_header')
    <h1>Editar Paciente</h1>
@stop

@section('content')
<form action="/pacientes/{{$paciente->id}}" method="POST">
    
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">CI</label>
        <input id="ci" name="ci" type="text" class="form-control" value="{{$paciente->ci}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$paciente->nombre}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Ap. Paterno</label>
        <input id="paterno" name="paterno" type="text" class="form-control" value="{{$paciente->paterno}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Ap. Materno</label>
        <input id="materno" name="materno" type="text" class="form-control" value="{{$paciente->materno}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Edad</label>
        <input id="edad" name="edad" type="number" class="form-control" value="{{$paciente->edad}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Telefono</label>
        <input id="telefono" name="telefono" type="number" class="form-control" value="{{$paciente->telefono}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Sexo</label>
        <input id="sexo" name="sexo" type="text" class="form-control" value="{{$paciente->sexo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Persona</label>
        <input id="persona" name="persona" type="text" class="form-control" value="{{$paciente->persona}}">
    </div>
    <a href="/pacientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Actualizar</a>

</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop