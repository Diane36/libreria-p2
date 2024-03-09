@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Detail Product</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">titulo</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $libros->titulo }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Autor</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $libros->Autor }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Editorial</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $libros->Editorial }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Precio</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $libros->precio }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">libro_code</label>
            <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{ $libros->libro_code }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection