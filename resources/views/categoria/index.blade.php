@extends('layouts.app')

@section('template_title')
    Categoria
@endsection

@section('content')
    <style>
        body, .container-fluid {
            margin: 0;
            padding: 0;
        }

        .menu-link {
            font-size: 30px;
        }

        .table th,
        .table td {
            font-size: 16px;
        }

        .btn {
            font-size: 16px;
        }

        .category-title {
            font-family: Bell MT, sans-serif;
            color: #735E59;
            font-size: 30px;
            font-weight: bold;
            margin: 20px 0;
        }
    </style>

    <div class="container-fluid">
        <!-- Menú -->
        <div class="menu-bar" style="background-color: #735E59; color: white; padding: 10px 20px;">
            <div class="row align-items-center">
                <div class="col-auto">
                    <!-- Enlace a la página principal -->
                    <a href="/" style="color: white; text-decoration: none;">
                        <h1><span class="movie-blog" style="font-family: 'Smoothy Butter', sans-serif;">Movie Blog</span></h1>
                    </a>
                </div>
                <div class="col">
                    <div class="d-flex justify-content-end">
                        <a href="/categorias" class="menu-link" style="color: white; text-decoration: none; font-family: 'Smoothy Butter', sans-serif; margin-right: 20px;">Categorías</a>
                        <a href="/peliculas" class="menu-link" style="color: white; text-decoration: none; font-family: 'Smoothy Butter', sans-serif;">Películas</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h1 class="category-title">
                    {{ __('Categoría') }}
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                             <div class="float-right">
                                <a href="{{ route('categorias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>Nombre Categoria</th>
                                        <th>Estado Categoria</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categorias as $categoria)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $categoria->nombre_categoria }}</td>
                                            <td>{{ $categoria->estado_categoria }}</td>
                                            <td>
                                                <form action="{{ route('categorias.destroy',$categoria->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('categorias.show',$categoria->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('categorias.edit',$categoria->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $categorias->links() !!}
            </div>
        </div>
    </div>
@endsection
