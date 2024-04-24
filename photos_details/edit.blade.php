@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>
                        Edit Photos Details
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($photosDetails, ['route' => ['photosDetails.update', $photosDetails->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('photos_details.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Guardar', ['class' => 'btn btn-outline-info']) !!}
                <a href="{{ route('photosDetails.index') }}" class="btn btn-ouline-info"> Cancelar </a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection