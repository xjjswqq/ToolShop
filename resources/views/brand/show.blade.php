@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="mb-4">Деталі бренду</h1>

        <div class="card">
            <div class="card-header">
                Brand ID: {{ $brand->id }}
            </div>
            <div class="card-body">
                <h5 class="card-title">Імя бренду: {{ $brand->name }}</h5>
            </div>
        </div>

        <a href="{{ route('brands.index') }}" class="btn btn-secondary mt-3">Назад до списку</a>
    </div>
@endsection
