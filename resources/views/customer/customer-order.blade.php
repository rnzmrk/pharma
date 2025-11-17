@extends('layouts.customer')
@section('title', 'Order')

@section('customer-main')
    <div class="bg-white container mb-4 px-1 py-2">

        <!--customer order content-->
        @livewire('customer.order')
    </div>
@endsection
