@extends('layouts.pharmacist')

@section('title', 'Home')

@section('pharma-main')

    <div class="container">
        <h3>Dashboard</h3>
        <hr>

        @livewire('pharma.product.index')
    </div>

@endsection
