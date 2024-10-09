@extends('layouts.app')

@section('content')
    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Product Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" name="price" id="price" class="form-control" value="{{ $product->price }}" required>
        </div>
        <div class="form-group">
            <label for="brand_id">Brand ID:</label>
            <input type="number" name="brand_id" id="brand_id" class="form-control" value="{{ $product->brand_id }}" required>
        </div>
        <div class="form-group">
            <label for="category_id">Category ID:</label>
            <input type="number" name="category_id" id="category_id" class="form-control" value="{{ $product->category_id }}" required>
        </div>
        <button type="submit" class="btn btn-warning">Update Product</button>
    </form>
@endsection
