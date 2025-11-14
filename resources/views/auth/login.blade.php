<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-----logo------>
    <link rel="icon" href="{{ asset('image/logo.png') }}">
    <!----css and js file---->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Login</title>
</head>
<body>
    <div class="container-fluid p-3">

        <div>
            <a href=""><i class="bi bi-arrow-left-circle display-5"></i></a>
            <h1 class="text-center mb-5">Login</h1>
        </div>

        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6 mb-3">
                <div class="d-flex justify-content-center">
                    <div class="border border-black rounded p-5 shadow-lg shadow-black">
                        <form>
                        <h5 class="text-center mb-5">Login your account</h5>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div>
                            <p>already have an account? <a href="" class="text-decoration-none">click here!</a></p>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-center">
                    <div>
                        <img src="{{ asset('image/peg2.gif') }}" alt=""
                        class="img-fluid rounded shadow-lg shadow-black">
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
