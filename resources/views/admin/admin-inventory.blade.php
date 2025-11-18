@extends('layouts.admin')

@section('title', 'Inventory')

@section('admin-main')

    <div class="container">
        <!---inventory content--->
        @livewire('admin.inventory.inventory')
    </div>

@endsection
