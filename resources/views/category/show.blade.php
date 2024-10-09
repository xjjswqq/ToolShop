@extends('layouts.app')

@section('content')
    <h1>Category Details</h1>

    <div class="card">
        <div class="card-header">
            Category ID: {{ $category->id }}
        </div>
        <div class="card-body">
            <h5 class="card-title">Category Name: {{ $category->name }}</h5>
        </div>
    </div>

    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
