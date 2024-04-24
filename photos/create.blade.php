@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>
                    Fotos
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

        
            {!! Form::open(['route' => 'photos.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

            <div class="card-body">

                <div class="row">
                    @include('photos.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Guardar', ['class' => 'btn btn-outline-info']) !!}
                <a href="{{ route('photos.index') }}" class="btn btn-outline-info"> Cancelar </a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
