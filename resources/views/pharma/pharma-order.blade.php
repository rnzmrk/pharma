@extends('layouts.pharmacist')

@section('title', 'Order')

@section('pharma-main')

    <div class="bg-white container mb-4 px-1 py-2">
        @livewire('pharma.order.index')
    </div>

@endsection
