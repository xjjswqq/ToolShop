@extends('layouts.app')

@section('title', 'Список Брендів')

@section('content')
<div class="container my-5">
    <h1 class="mb-4">Список Брендів</h1>
    <a href="{{ route('brands.create') }}" class="btn btn-primary mb-3">Додати Новий Бренд</a>
    <div class="card p-4">
        <table class="table table-hover">
            <thead class="bg-light">
                <tr>
                    <th>ID</th>
                    <th>Назва</th>
                    <th>Дії</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($brands as $brand)
                    <tr>
                        <td>{{ $brand->id }}</td>
                        <td>{{ $brand->name }}</td>
                        <td>
                            <a href="{{ route('brands.show', $brand->id) }}" class="btn btn-outline-primary btn-sm">Переглянути</a>
                            <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-outline-warning btn-sm">Редагувати</a>
                            <form action="{{ route('brands.destroy', $brand->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Ви впевнені, що хочете видалити цей бренд?');">Видалити</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
