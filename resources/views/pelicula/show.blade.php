@extends('layouts.app')

@section('template_title')
    {{ $pelicula->name ?? "{{ __('Show') Pelicula" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pelicula</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('peliculas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombrep:</strong>
                            {{ $pelicula->nombreP }}
                        </div>
                        <div class="form-group">
                            <strong>Aniop:</strong>
                            {{ $pelicula->anioP }}
                        </div>
                        <div class="form-group">
                            <strong>Descrip:</strong>
                            {{ $pelicula->descriP }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria Id:</strong>
                            {{ $pelicula->categoria_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
