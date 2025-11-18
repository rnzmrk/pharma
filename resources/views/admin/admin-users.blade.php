@extends('layouts.admin')

@section('title', 'Users')
@section('admin-main')

 <div class="container">

    @livewire('admin.users.index')

</div>

@endsection
