@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="mb-4">Редагувати бренд</h1>

        <div class="card p-4">
            <form action="{{ route('brands.update', $brand->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Імя бренду:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $brand->name }}" required>
                </div>
                <button type="submit" class="btn btn-warning">Оновити бренд</button>
            </form>
        </div>
    </div>
@endsection
