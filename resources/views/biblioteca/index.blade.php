@extends('layouts.app')
@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Listado de libros</h1>
        <a href="{{ route('biblioteca.create') }}" class="btn btn-primary">Añadir libro</a>
    </div>   
@if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
@endif 
<table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Editorial</th>
                <th>Precio</th>
                <th>Codigo del libro</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($libros->count() > 0)
                @foreach($libros as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->titulo }}</td>
                        <td class="align-middle">{{ $rs->Autor }}</td>
                        <td class="align-middle">{{ $rs->Editorial }}</td>
                        <td class="align-middle">{{ $rs->precio }}</td>
                        <td class="align-middle">{{ $rs->libro_code }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('biblioteca.show', $rs->id) }}" type="button" class="btn btn-secondary">Detalle</a>
                                <a href="{{ route('biblioteca.edit', $rs->id)}}" type="button" class="btn btn-warning">Editar</a>
                                <form action="{{ route('biblioteca.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Eliminar?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Libro no encontrado</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection

