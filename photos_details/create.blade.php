@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>
                    Create Photos Details
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'photosDetails.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('photos_details.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-outline-info']) !!}
                <a href="{{ route('photosDetails.index') }}" class="btn btn-outline-info"> Cancelar </a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
