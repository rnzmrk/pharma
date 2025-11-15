@extends('layouts.admin')

@section('title', 'Order')
@section('admin-main')

     <div class="bg-white container mb-4 px-1 py-2">

        <h1 @class(['text-center', 'mb-3'])>ORDER</h1>

        <div @class(['row', 'g-4'])>

            <div @class(['col-12', 'col-sm-6', 'col-md-4', 'col-lg-3'])>
                <div @class(['card', 'p-1', 'h-100'])
                style="width: auto;">
                <img src="{{ asset('image/c2.jpg') }}" alt=".." @class(['card-img-top'])
                 style="height: 250px; object-fit: cover;">
                <div @class(['card-body'])
                style="line-height: 0.5; font-size: 0.95rem;">
                    <h6 @class(['card-title']) >Ladsnjk</h6>
                    <p>quantity: </p>
                    <p>price: </p>
                    <p>mode: </p>
                    <p>status: </p>
                    <p>payemnt status:</p>asdad
                </div>
                </div>
            </div>

            <div @class(['col-12', 'col-sm-6', 'col-md-4', 'col-lg-3'])>
                <div @class(['card', 'p-1', 'h-100'])
                style="width: auto;">
                <img src="{{ asset('image/c2.jpg') }}" alt=".." @class(['card-img-top'])
                 style="height: 250px; object-fit: cover;">
                <div @class(['card-body'])
                style="line-height: 0.5; font-size: 0.95rem;">
                    <h6 @class(['card-title']) >Ladsnjk</h6>
                    <p>quantity: </p>
                    <p>price: </p>
                    <p>mode: </p>
                    <p>status: </p>
                    <p>payemnt status:</p>
                </div>
                </div>
            </div>

            <div @class(['col-12', 'col-sm-6', 'col-md-4', 'col-lg-3'])>
                <div @class(['card', 'p-1', 'h-100'])
                style="width: auto;">
                <img src="{{ asset('image/c2.jpg') }}" alt=".." @class(['card-img-top'])
                 style="height: 250px; object-fit: cover;">
                <div @class(['card-body'])
                style="line-height: 0.5; font-size: 0.95rem;">
                    <h6 @class(['card-title']) >Ladsnjk</h6>
                    <p>quantity: </p>
                    <p>price: </p>
                    <p>mode: </p>
                    <p>status: </p>
                    <p>payemnt status:</p>
                </div>
                </div>
            </div>

            <div @class(['col-12', 'col-sm-6', 'col-md-4', 'col-lg-3'])>
                <div @class(['card', 'p-1', 'h-100'])
                style="width: auto;">
                <img src="{{ asset('image/c2.jpg') }}" alt=".." @class(['card-img-top'])
                 style="height: 250px; object-fit: cover;">
                <div @class(['card-body'])
                style="line-height: 0.5; font-size: 0.95rem;">
                    <h6 @class(['card-title']) >Ladsnjk</h6>
                    <p>quantity: </p>
                    <p>price: </p>
                    <p>mode: </p>
                    <p>status: </p>
                    <p>payemnt status:</p>
                </div>
                </div>
            </div>

        </div>
    </div>

@endsection
