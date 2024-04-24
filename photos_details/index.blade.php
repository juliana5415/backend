@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detalles Fotos</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-outline-info float-right"
                       href="{{ route('photosDetails.create') }}">
                        Añadir nuevo
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            @include('photos_details.table')
        </div>
    </div>

@endsection
