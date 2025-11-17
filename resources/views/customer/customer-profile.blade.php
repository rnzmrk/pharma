@extends('layouts.customer')
@section('title', 'Profile')

@section('customer-main')
    <div class="bg-white container vh-100 mb-3">
        <!--customer profile content--->
        @livewire('customer.profile')
    </div>
@endsection
