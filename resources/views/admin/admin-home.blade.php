@extends('layouts.admin')

@section('title', 'Home')
@section('admin-main')

    <div class="container vh-100">
        <h3>Dashboard</h3>
        <hr>
        @livewire('admin.product')
    </div>

@endsection
