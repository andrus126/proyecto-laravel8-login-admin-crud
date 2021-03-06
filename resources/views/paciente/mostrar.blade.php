@extends('adminlte::page')

@section('title', 'Listado de Pacientes')

@section('content_header')
    <h1>Paciente-Laboratorista</h1>
@stop

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>nombre Paciente</th>
                                        <th>Apellido Paciente</th>
										<th>Laboratorista encargado</th>
										<th>Especialidad</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($laboratorista->Pacientes as $registro)
                                        <tr>
                                            
                                            
											<td>{{ $registro->nombre }}</td>
											<td>{{ $registro->paterno }}</td>
                                            
                                            @foreach ($paciente->Laboratoristas as $labo)

											<td>{{ $labo->paterno }}</td>
											<td>{{ $labo->especialidad }}</td>
                                           
                                            <td>
                                                <form action="{{ route('laboratoristas.destroy',$laboratorista->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('laboratoristas.show',$laboratorista->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('laboratoristas.edit',$laboratorista->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                            @endforeach      
                                        </tr>
                                        @endforeach   
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
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