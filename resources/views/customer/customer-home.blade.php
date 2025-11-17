@extends('layouts.customer')

@section('title', 'Home')

@section('customer-main')

    <div class="container-fluid mb-5">

        <!--header-->
        <div class="container rounded text-center mb-3 bg-white p-3">
            <h5>WELCOME TO VELARIS APOTHECARY</h5>
            <p class="mb-3">
                            Discover a sanctuary of wellness where tradition meets modern care.
                            From herbal remedies to trusted essentials,
                            here to support your health journey naturally.
            </p>

        </div>

        @livewire('customer.product')

    </div>
@endsection
