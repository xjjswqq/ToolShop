@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="mb-4">Створити новий бренд</h1>

        <div class="card p-4">
            <form action="{{ route('brands.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Імя бренду:</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Створити бренд</button>
            </form>
        </div>
    </div>
@endsection
