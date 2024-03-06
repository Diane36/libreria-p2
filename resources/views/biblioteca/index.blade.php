@extends('layouts.app')
@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Listado de libros</h1>
        <a href="{{ route('biblioteca.create') }}" class="btn btn-primary">Añadir libro</a>
    </div>
@endsection   
@if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
@endif 
