<!DOCTYPE html>

@extends('layouts.customer')

@section('title', 'Checkout')

@section('customer-main')
    <div class="container-fluid">
        <div class="mb-4">
            <a href="{{ route('customer.cart') }}"><i class="bi bi-arrow-left-square-fill display-5"></i></a>
            <h1 class="text-center">CHECKOUT</h1>
        </div>

        <hr>

        @livewire('customer.checkout')

        <div class="d-flex justify-content-between mb-5">
            <div>
                <h4 class="mb-0">Total amount: </h4>
            </div>
            <div>
                <p class="mb-0"><strong>349</strong></p>
            </div>
        </div>




    </div>
</body>
</html>
