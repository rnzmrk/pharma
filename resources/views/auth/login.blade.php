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

    <div class="container-fluid"
    style="background-image: url('{{ asset('image/log1.gif') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    min-height: 100vh;">
        <div class="p-3">
            <a href="{{ route('web') }}"><i class="bi bi-arrow-left-circle display-5 text-white"></i></a>
            <h1 class="text-center mb-5 text-white">Login</h1>
        </div>

        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6 mb-3">
                <div class="d-flex justify-content-center">
                    <div class="border border-white rounded p-5 shadow-lg shadow-white bg-white">
                        <form method="POST" action="{{ route('login.store') }}">
                        @csrf
                        <h5 class="text-center mb-5">Login your account</h5>
                        <div class="mb-3">
                            <label for="" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required>
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="1" id="remember" name="remember">
                            <label class="form-check-label" for="remember">
                              Remember me
                            </label>
                        </div>
                        <div>
                            <p>dont't have an account? <a href="{{ route('register') }}" class="text-decoration-none">click here!</a></p>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                        @if (session('status'))
                            <div class="alert alert-success mt-3">{{ session('status') }}</div>
                        @endif
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
