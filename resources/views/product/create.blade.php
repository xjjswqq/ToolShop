@extends('layouts.app')

@section('content')
    <h1>Create New Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Product Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" name="price" id="price" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="brand_id">Brand ID:</label>
            <input type="number" name="brand_id" id="brand_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="category_id">Category ID:</label>
            <input type="number" name="category_id" id="category_id" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Product</button>
    </form>
@endsection
