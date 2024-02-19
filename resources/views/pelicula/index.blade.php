@extends('layouts.app')

@section('template_title')
    Pelicula
@endsection

@section('content')
    <div class="">
        <div class="row">
            <div class="col-sm-12">
                <div class="menu-bar" style="background-color: #735E59; color: white; padding: 10px 20px;">
                    <div class=row>
                        <div class="col-6">
                            <h1><a href="/" class="movie-blog" style="font-family: 'Smoothy Butter', sans-serif; text-decoration: none; color: inherit;">Movie Blog</a></h1>
                        </div>
                        <div class="col-6 text-end" >
                            <a href="/categorias" style="color: white; text-decoration: none; margin-left: 30px; font-family: 'Smoothy Butter', sans-serif; font-size: 30px;">Categorías</a>
                            <a href="/peliculas" style="color: white; text-decoration: none; margin-left: 30px; font-family: 'Smoothy Butter', sans-serif; font-size: 30px;">Películas</a>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title" style="font-size: 30px; color: #735E59; font-family: Bell MT, sans-serif; font-weight: bold;">
                                {{ __('Peliculas') }}
                            </span>
                            <div class="float-right">
                                <a href="{{ route('peliculas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>Nombre</th>
                                        <th>Año</th>
                                        <th>Descripción</th>
                                        <th>Categoría</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($peliculas as $pelicula)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $pelicula->nombreP }}</td>
                                            <td>{{ $pelicula->anioP }}</td>
                                            <td>{{ $pelicula->descriP }}</td>
                                            <td>{{ $pelicula->categoria_id }}</td>
                                            <td>
                                                <form action="{{ route('peliculas.destroy',$pelicula->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('peliculas.show',$pelicula->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('peliculas.edit',$pelicula->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $peliculas->links() !!}
            </div>
        </div>
    </div>

    <!-- Aquí agregamos el bloque de CSS -->
    <style>
        /* Para ajustar el tamaño de las letras de las tablas */
        .table,
        .table th,
        .table td {
            font-size: 16px; /* Ajusta el tamaño según tus preferencias */
        }

        /* Para ajustar el tamaño de las letras de los botones */
        .btn,
        .btn-sm {
            font-size: 16px; /* Ajusta el tamaño según tus preferencias */
        }
    </style>
@endsection
