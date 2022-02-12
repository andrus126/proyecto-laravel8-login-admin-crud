@extends('adminlte::page')

@section('title', 'Listado de Pacientes')

@section('content_header')
    <h1>Listado de Pacientes</h1>
@stop

@section('content')
<a href="pacientes/create" class="btn btn-primary mb-3">CREAR</a>

<table id="pacientes" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">CI</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">AP. PATERNO</th>
            <th scope="col">AP. MATERNO</th>
            <th scope="col">EDAD</th>
            <th scope="col">TELEFONO</th>
            <th scope="col">SEXO</th>
            <th scope="col">PERSONA</th>
            <th scope="col">ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pacientes as $paciente)
        <tr>
            <td>{{$paciente->id}}</td>
            <td>{{$paciente->ci}}</td>
            <td>{{$paciente->nombre}}</td>
            <td>{{$paciente->paterno}}</td>
            <td>{{$paciente->materno}}</td>
            <td>{{$paciente->edad}}</td>
            <td>{{$paciente->telefono}}</td>
            <td>{{$paciente->sexo}}</td>
            <td>{{$paciente->persona}}</td>
            <td>
                <form action="{{route ('pacientes.destroy',$paciente->id)}}" method="POST">
                <a href="/pacientes/{{$paciente->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>

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

    <script>

    $(document).ready(function() {
        $('#pacientes').DataTable({
            "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]]
        });
    } );
    </script>
@stop