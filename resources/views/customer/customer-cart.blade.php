@extends('layouts.customer')
@section('title', 'Cart')

@section('customer-main')
    <div class="container mb-4">
        @livewire('customer.cart')
    </div>
@endsection
