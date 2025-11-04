<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!----css and js file---->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
{{--  --}}
        <!--------page title------>
        <title>website</title>

    </head>
    <body>

        <!-- Website Navbar -->
        <header>
            <nav class="navbar navbar-expand-lg bg-black">
                <div class="container-fluid">

                    <!-- Website Logo / Name -->
                    <a class="navbar-brand text-light" href="#">NAVBAR</a>

                    <!-- Burger Button -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navbar Links -->
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text-light" aria-current="page" href="#">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="#">FEATURES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="#">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="#">LOGIN</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </header>

        <!-- Website Content -->
        <main>

            <!-- Website Background Section -->
            <div class="container-fluid position-relative vh-100 p-0">

                <!-- Background Image -->
                <img src="{{ asset('image/blackbg.jpg') }}" alt="Background"
                class="w-100 h-100 object-fit-cover position-absolute top-0 start-0">

                <!-- Text -->
                <div class="d-flex justify-content-center align-items-center vh-100 position-relative text-white">
                    <h1 class="display-4 fw-bold">dsnaklsndkl</h1>
                </div>

            </div>

        </main>

        <!--website courosel /FEATURES--->
        <section>

            <!--carousel-->
            <div class="contianer-fluid bg-black">
                <div class="row justify-content-center">

                    <div class="col-md-6">

                        <!--auto playing carousel-->
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                <img src="{{ asset('image/pic1.jpg') }}" class="d-block w-100 h-50" style="object-fit: contain;" alt="med1">
                                </div>

                                <div class="carousel-item">
                                <img src="{{ asset('image/pic2.jpg') }}" class="d-block w-100 h-50" style="object-fit: contain;" alt="med2">
                                </div>

                                <div class="carousel-item">
                                <img src="{{ asset('image/pic3.jpg') }}" class="d-block w-100 h-50" style="object-fit: contain;" alt="med3">
                                </div>

                                <div class="carousel-item">
                                <img src="{{ asset('image/pic4.jpg') }}" class="d-block w-100 h-50" style="object-fit: contain;" alt="med4">
                                </div>

                                <div class="carousel-item">
                                <img src="{{ asset('image/pic5.webp') }}" class="d-block w-100 h-50" style="object-fit: contain;" alt="med5">
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </section>

        <!--ABOUT US--->
        <section>

        </section>

    </body>
</html>
