@extends('layouts.app')

@section('content')
    <h1>Order Details</h1>

    <div class="card">
        <div class="card-header">
            Order ID: {{ $order->id }}
        </div>
        <div class="card-body">
            <h5 class="card-title">Customer ID: {{ $order->customer_id }}</h5>
            <p>Total Amount: ${{ $order->total_amount }}</p>
        </div>
    </div>

    <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
