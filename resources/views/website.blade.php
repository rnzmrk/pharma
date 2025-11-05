<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!----css and js file---->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

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
                                <a class="nav-link text-light" href="#">CONTACT US</a>
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
                class="w-100 h-100 height: 200px; object-fit-cover position-absolute top-0 start-0">

                <!-- Text -->
                <div class="d-flex justify-content-center align-items-center vh-100 position-relative text-white">
                    <h1 class="display-4 fw-bold">dsnaklsndkl</h1>
                </div>

            </div>

        </main>

        <!--website courosel /FEATURES--->
        <section>

            <!--carousel-->
            <div class="contianer-fluid bg-black mb-3">
                <div class="row justify-content-center">

                    <!--header text----->
                    <div class="col-md-12 d-flex justify-content-center alighn-items-center py-2">
                        <h1 class="text-white mb-2">FEATURES PRODUCTS</h1>
                    </div>

                    <div class="col-md-6 py-2">

                        <!--auto playing carousel-->
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                <img src="{{ asset('image/pic1.jpg') }}" class="d-block w-100" style="height: 200px; object-fit: contain;" alt="med1">
                                </div>

                                <div class="carousel-item">
                                <img src="{{ asset('image/pic2.jpg') }}" class="d-block w-100" style="height: 200px; object-fit: contain;" alt="med2">
                                </div>

                                <div class="carousel-item">
                                <img src="{{ asset('image/pic3.jpg') }}" class="d-block w-100" style="height: 200px; object-fit: contain;" alt="med3">
                                </div>

                                <div class="carousel-item">
                                <img src="{{ asset('image/pic4.jpg') }}" class="d-block w-100" style="height: 200px; object-fit: contain;" alt="med4">
                                </div>

                                <div class="carousel-item">
                                <img src="{{ asset('image/pic5.webp') }}" class="d-block w-100" style="height: 200px; object-fit: contain;" alt="med5">
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </section>

        <!--ABOUT US--->
        <section>
            <div class="container bg-tertiary rounded shadow-lg py-2 mb-3">
                <div class="row">
                    <!--header text-->
                    <div class="col-md-12 d-flex justify-content-center py-2">
                        <h1>ABOUT US</h1>
                    </div>

                    <div class="row align-items-center">

                        <!--left content--->
                        <div class="col-md-6 col-12 px-5">

                            <p class="">
                            <strong>Your Pharmacy Name</strong> is more than just a place to pick up prescriptions were your neighborhood health partner.
                            Founded with a mission to provide accessible, compassionate care, our team of licensed pharmacists and healthcare
                            professionals are committed to helping you live your healthiest life.
                            </p>

                            <p><strong>We believe in:</strong></p>
                            <ul>
                                <li><strong>Trust: </strong>Every interaction is guided by integrity and confidentiality.</li>
                                <li><strong>Care: </strong>We treat every customer like family, offering personalized support.</li>
                                <li><strong>Innovation: </strong>From online services to modern health tools, we embrace technology to serve you better.</li>
                            </ul>

                            <p>
                                Whether you're managing a chronic condition, seeking wellness products,
                                or simply need advice, we're here for you every step of the way.
                            </p>

                        </div>

                        <!--right content--->
                        <div class="col-sm-6 d-flex justify-content-center align-items-center">
                                <img src="{{ asset('image/peg1.gif') }}" class="img-fluid rounded" style="object-fit: contain" alt="">
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!--services-->
        <section>
            <div class="container-fluid vh-100 bg-black py-3 mb-3">
                <div class="bg-white rounded">
                    <div class="row">

                        <div class="col-md-12 d-flex justify-content-center alighn-items-center py-2">
                            <h1>SERVICES</h1>
                        </div>

                        <div class="row justify-content-center align-items-center g-2 px-3 py-3">

                            <!--services--->
                            <div class="col-sm-4">
                                <div class="card bg-dark h-100">
                                    <img src="" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title andp
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="card bg-dark h-100">
                                    <img src="" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title andp
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="card bg-dark h-100">
                                    <img src="" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title andp
                                            make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!--contact-->
        <section>
            <div class="container vh-100 bg-white shadow-lg rounded py-4 mb-3">
                <div class="row">

                    <div class="col-md-12 d-flex justify-content-center alighn-items-center">
                        <h1>CONTACT US</h1>
                    </div>

                    <div class="col-md-6">

                    </div>

                    <div class="col-md-6">

                    </div>

                </div>
            </div>
        </section>

        <footer>
            <div class="container-fluid bg-dark">
                <div class="row text-white text-center text-md-start py-4">

                    <div class="col-md-3 mb-3">
                        <h5>Contact Info</h5>
                        <p>
                            nfsdlkfslkdnf
                        </p>

                        <p>jpg?asfdas</p>
                    </div>

                    <div class="col-md-3 mb-3">
                        <h5>Contact Info</h5>
                        <p>Address: 123 Main St, City, Country</p>
                        <p>Phone: (123) 456-7890</p>
                        <p>Email:
                    </div>

                    <div class="col-md-3 mb-3">
                        <h5>Follow Us</h5>
                        <p>
                            <a href="#" class="text-white me-2">Facebook</a>
                            <a href="#" class="text-white me-2">Twitter</a>
                            <a href="#" class="text-white">Instagram</a>
                        </p>

                    </div>

                    <div class="col-md-3 mb-3">
                        <h5>Follow Us</h5>
                        <p>
                            <a href="#" class="text-white me-2">Facebook</a>
                            <a href="#" class="text-white me-2">Twitter</a>
                            <a href="#" class="text-white">Instagram</a>
                        </p>

                    </div>

                </div>

            </div>
        </footer>

        <!--rights reserved-->
        <div class="container-fluid bg-black text-center text-white py-3">
            <p class="mb-0">&copy; 2024 Your Pharmacy Name. All rights reserved.</p>
        </div>

    </body>
</html>
