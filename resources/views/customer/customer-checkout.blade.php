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

        <div class="row g-3">

            <div class="col-md-6 p-3">
                <div class="">
                    <img src="" alt="">
                    <h6>title</h6>
                    <p>price</p>
                    <p>quantity: </p>
                </div>

                <div @class(['d-flex', 'justify-content-center', 'align-items-center', 'gap-2', 'mb-3'])>
                            <button class="btn btn-outline-secondary btn-sm">-</button>
                            <span @class(['px-2'])>1</span>
                            <button class="btn btn-outline-secondary btn-sm">+</button>
                </div>

            </div>

            <div class="col-md-6 p-3">
                <div>

                    <div>
                        <select class="form-select form-select-sm" aria-label="Default select example">
                        <option selected>MODE</option>
                        <option value="1">cod</option>
                        <option value="2">e-cash</option>
                        <option value="3">pick-up</option>
                        </select>
                    </div>

                    <h6>address:</h6>
                    <p>asdasdasdadasdasdadklansdn</p>
                    <h6>contact:</h6>
                    <p>3490583904</p>
                </div>
            </div>

        </div>

        <hr>

        <div class="col-md-12">

            <h5>item amount: 345789</h5>
            <h5>conventional fee: 40</h5>
            <hr>
            <h3>total amount:</h3>

            <button class="btn btn-primary" type="button">CHECKOUT</button>

        </div>


    </div>
</body>
</html>
