@extends('layouts.app')

@section('content')
    <h1>Customer Details</h1>

    <div class="card">
        <div class="card-header">
            Customer ID: {{ $customer->id }}
        </div>
        <div class="card-body">
            <h5 class="card-title">Customer Name: {{ $customer->name }}</h5>
            <p>Email: {{ $customer->email }}</p>
        </div>
    </div>

    <a href="{{ route('customers.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
