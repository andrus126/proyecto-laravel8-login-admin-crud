@extends('adminlte::page')

@section('title', 'Listado de Laboratoristas')

@section('content_header')
    <h1>Listado de Laboratoristas</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Laboratorista') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('laboratoristas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Ci</th>
										<th>Nombre</th>
										<th>Paterno</th>
										<th>Especialidad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($laboratoristas as $laboratorista)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $laboratorista->ci }}</td>
											<td>{{ $laboratorista->nombre }}</td>
											<td>{{ $laboratorista->paterno }}</td>
											<td>{{ $laboratorista->especialidad }}</td>

                                            <td>
                                                <form action="{{ route('laboratoristas.destroy',$laboratorista->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('laboratoristas.show',$laboratorista->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('laboratoristas.edit',$laboratorista->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $laboratoristas->links() !!}
            </div>
        </div>
    </div>
@endsection
