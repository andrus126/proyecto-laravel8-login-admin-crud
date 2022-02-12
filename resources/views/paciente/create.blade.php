@extends('adminlte::page')

@section('title', 'Registro Paciente')

@section('content_header')
    <h1>Registrar Paciente</h1>
@stop

@section('content')
    <form action="/pacientes" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">CI</label>
        <input id="ci" name="ci" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Ap. Paterno</label>
        <input id="paterno" name="paterno" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Ap. Materno</label>
        <input id="materno" name="materno" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Edad</label>
        <input id="edad" name="edad" type="number" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Telefono</label>
        <input id="telefono" name="telefono" type="number" class="form-control" tabindex="5">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Sexo</label>
        <input id="sexo" name="sexo" type="text" class="form-control" tabindex="6">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Persona</label>
        <input id="persona" name="persona" type="text" class="form-control" tabindex="7">
    </div>
    <a href="/pacientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</a>

</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop