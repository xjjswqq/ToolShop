@extends('layouts.app')

@section('content')
    <h1>Edit Order</h1>

    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="customer_id">Customer ID:</label>
            <input type="number" name="customer_id" id="customer_id" class="form-control" value="{{ $order->customer_id }}" required>
        </div>
        <div class="form-group">
            <label for="total_amount">Total Amount:</label>
            <input type="text" name="total_amount" id="total_amount" class="form-control" value="{{ $order->total_amount }}" required>
        </div>
        <button type="submit" class="btn btn-warning">Update Order</button>
    </form>
@endsection
