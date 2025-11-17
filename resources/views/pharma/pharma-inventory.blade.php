@extends('layouts.pharmacist')

@section('title', 'Inventory')

@section('pharma-main')

    <div class="container">
        <!---pharma content -->
        @livewire('pharma.inventory')
    </div>

@endsection
