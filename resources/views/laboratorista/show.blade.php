@extends('adminlte::page')

@section('template_title')
    {{ $laboratorista->name ?? 'Show Laboratorista' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Laboratorista</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('laboratoristas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ci:</strong>
                            {{ $laboratorista->ci }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $laboratorista->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Paterno:</strong>
                            {{ $laboratorista->paterno }}
                        </div>
                        <div class="form-group">
                            <strong>Especialidad:</strong>
                            {{ $laboratorista->especialidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
