@extends('adminlte::page')

@section('title', 'Administrador de Blog | Casa Crédito')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <section class="container pt-5">
        <section class="row">
            <section class="d-flex justify-content-between w-100">
                <h1 class="m-0 p-0">Blog</h1>
                <a href="{{ route('home.blog.create') }}" class="btn btn-success d-flex align-items-center">CREAR ARTÍCULO</a>
            </section>
        </section>

        <section class="row mt-4">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Titulo del articulo</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <th scope="row">{{ $article->id }}</th>
                            <th><img width="80px" src="{{ asset('uploads/webp/' . $article->banner_image) }}" alt=""></th>
                            <td>{{ $article->title }}</td>
                            <td class="@if($article->status) text-success @else text-danger @endif">
                                @if($article->status) ACTIVO @else DESACTIVADO @endif
                            </td>
                            <td>
                                <a href="{{ route('home.blog.edit', $article) }}" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="" class="btn btn-info"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </section>
    </section>
@endsection