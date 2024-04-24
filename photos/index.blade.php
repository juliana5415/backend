@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Fotos</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-outline-info float-right"
                       href="{{ route('photos.create') }}">
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
            @include('photos.table')
        </div>
    </div>

@endsection
