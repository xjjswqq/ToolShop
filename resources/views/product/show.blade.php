@extends('layouts.app')

@section('content')
    <h1>Product Details</h1>

    <div class="card">
        <div class="card-header">
            Product ID: {{ $product->id }}
        </div>
        <div class="card-body">
            <h5 class="card-title">Product Name: {{ $product->name }}</h5>
            <p>Price: ${{ $product->price }}</p>
            <p>Brand ID: {{ $product->brand_id }}</p>
            <p>Category ID: {{ $product->category_id }}</p>
        </div>
    </div>

    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
