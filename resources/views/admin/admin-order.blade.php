@extends('layouts.admin')

@section('title', 'Order')
@section('admin-main')

     <div class="bg-white container mb-4 px-1 py-2">

        <!--order content-->
        @livewire('admin.order')
    </div>

@endsection
