@extends('adminlte::page')

@section('title', 'Registro Laboratorista')

@section('content_header')
    <h1>Registrar Laboratorista</h1>
@stop


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Laboratorista</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('laboratoristas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('laboratorista.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop
