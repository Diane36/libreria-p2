@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Añadir libro</h1>
    <form action="{{ route('biblioteca.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="titulo" class="form-control" placeholder="Titulo" value="{{ old('titulo')}}">
            </div>
            <div class="col">
                <input type="text" name="autor" class="form-control" placeholder="Autor" value="{{ old('autor')}}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="editorial" class="form-control" placeholder="Editorial" value="{{ old('editorial')}}">
            </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="libro_code" class="form-control" placeholder="Libro_Code" value="{{ old('libro code')}}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Añadir</button>
            </div>
        </div>
    </form>
@endsection
