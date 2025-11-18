@extends('layouts.admin')

@section('title', 'History')
@section('admin-main')

    <div class="bg-white container mb-4 px-1 py-2">
        @livewire('admin.history.index')
    </div>

@endsection
