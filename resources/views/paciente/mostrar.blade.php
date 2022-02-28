@extends('adminlte::page')

@section('title', 'Listado de Pacientes')

@section('content_header')
    <h1>Paciente-Laboratorista</h1>
@stop

@section('content')
<a href="pacientes/create" class="btn btn-primary mb-3">CREAR</a>

<table id="pacientes" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            
            <th scope="col">NOMBRE PACIENTE</th>
            <th scope="col">AP. PATERNO PACIENTE</th>
            <th scope="col">LABORATORISTA</th>
            <th scope="col">ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach($paciente -> laboratoristas as $pacientelabo)
        <tr>
            
            <td>{{$pacientelabo->nombre}}</td>
            <td>{{$pacientelabo->paterno}}</td>
            echo ($pacientelabo)
            
            
            
        </tr>

        @endforeach
    </tbody>
</table>
@stop

@section('css')
    
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

@stop