@extends('layouts.customer')
@section('title', 'Cart')

@section('customer-main')
    <div class="bg-white container mb-4">

        <h1 @class(['text-center'])>ADD TO CART</h1>

        <div @class(['row', 'justify-content-center', 'align-items-center', 'mb-3'])>

            <div @class(['col-md-10', 'rounded', 'border', 'shadow-lg', 'm-3', 'h-100', 'p-2', 'm-3'])>
                <div @class(['row', 'g-2'])>
                    <!--image--->
                    <div @class(['col-md-3'])>
                        <img src="{{ asset('image/1.jpg') }}" alt="" style="" @class(['img-fluid', 'h-100'])
                        style="object-fit: contain;">
                    </div>

                    <!--details----->
                    <div @class(['col-md-5', 'text-center'])
                    style="line-height: 0.5;">
                        <h6>title</h6>
                        <p>descriopton</p>
                        <p>price</p>
                    </div>

                    <!---quantity-->
                    <div @class(['col-md-3'])>

                        <!---+ and - -->
                        <div @class(['d-flex', 'justify-content-center', 'align-items-center', 'gap-2', 'mb-3'])>
                            <button class="btn btn-outline-secondary btn-sm">-</button>
                            <span @class(['px-2'])>1</span>
                            <button class="btn btn-outline-secondary btn-sm">+</button>
                        </div>

                        <!---total-->
                        <div @class(['mb-3'])>
                            <h6 @class(['text-center']) >total: 34534</h6>
                        </div>

                        <!---checkout-->
                        <div @class(['d-flex', 'justify-content-center', 'align-items-center'])>
                            <button @class(['btn btn-primary'])>CHECKOUT</button>
                        </div>

                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection
