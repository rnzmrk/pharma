<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!----css and js file---->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Checkout</title>
</head>
<body>
    <div class="container-fluid">

        <!----header--->
        <div class="mb-4">
            <a href=""><i class="bi bi-arrow-left-square-fill display-5"></i></a>
            <h1 class="text-center">CHECKOUT</h1>
        </div>

        <hr>

        <div class="container my-4 bg-tertiary">
            <div class="row">
                <div class="col-md-6 p-3">
                    <div class=" mb-3">
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('image/c5.jpg') }}" alt="" class="img-fluid"
                            style="object-fit: contain; height: 250px; width: auto;">
                        </div>
                        <h6 class="fw-bold text-center mb-3">Title</h6>
                        <p class="text-center    text-muted mb-3">Price: <strong>342</strong></p>
                        <p class="text-center">Quantity: <strong>1</strong></p>
                    </div>
                    <div @class(['d-flex', 'justify-content-center', 'align-items-center', 'gap-2', 'mb-1'])>
                                <button class="btn btn-outline-secondary btn-sm">-</button>
                                <span @class(['px-2'])>1</span>
                                <button class="btn btn-outline-secondary btn-sm">+</button>
                    </div>
                </div>

                <div class="col-md-6 p-3">
                    <div>
                        <div class="mb-5">
                            <select class="form-select form-select-sm" aria-label="Default select example">
                            <option selected>MODE</option>
                            <option value="1">cod</option>
                            <option value="3">pick-up</option>
                            </select>
                        </div>

                        <div class="mb-5">
                            <h6>address:</h6>
                            <p class="text-break">asdasdasdadasdasdadklanbaskjdbasjkbdjkasbdjkasjkdbakjbasdkjsdnsdasdadasdasdadklanbaskjdbasjkbdjkasbdjka</p>
                        </div>

                        <div>
                            <h6>contact:</h6>
                            <p>3490583904</p>
                        </div>

                    </div>
                </div>

            </div>

            <hr>

            <div class="col-md-12">

                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <h6 class="mb-0">Item amount:</h6>
                    </div>
                    <div>
                        <p class="mb-0"><strong>₱349</strong></p>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <div>
                        <h6 class="mb-0">Conventional fee: </h6>
                    </div>
                    <div>
                        <p class="mb-0"></p><strong>₱349</strong></p>
                    </div>
                </div>

                <hr>

                <div class="d-flex justify-content-between mb-5">
                    <div>
                        <h4 class="mb-0">Total amount: </h4>
                    </div>
                    <div>
                        <p class="mb-0"></p><strong>349</strong></p>
                    </div>
                </div>

                <button class="btn btn-primary w-100" type="button">CHECKOUT</button>


            </div>



        </div>




    </div>
</body>
</html>
