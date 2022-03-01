@extends('adminlte::page')

@section('template_title')
    Update Laboratorista
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Laboratorista</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('laboratoristas.update', $laboratorista->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('laboratorista.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
