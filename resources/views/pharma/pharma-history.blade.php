@extends('layouts.pharmacist')

@section('title', 'History')

@section('pharma-main')


    <div class="bg-white container mb-4 px-1 py-2">
        @livewire('pharma.history.index')
    </div>

@endsection
