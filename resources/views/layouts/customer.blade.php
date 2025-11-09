<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!----css and js file---->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!--------page title------>
    <title>Document</title>

</head>
<body class="bg-black">

    <!-- Website Navbar -->
    <header class=" sticky-top mb-5">
        <nav class="navbar navbar-expand-lg bg-black ">
            <div class="container-fluid">

                <!-- Website Logo / Name -->
                <a class="navbar-brand text-light" href="#">
                    <img src="{{ asset('image/logo.png') }}" alt=""
                    class="img-fluid" style="height: 30px; object-fit: cover;">
                    VELARIS APOTHECARY</a>

                <!-- Burger Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar Links -->
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link text-light" aria-current="page" href="#home">HOME</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="#contact">CONTACT</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="#contact"><i class="bi bi-gear-fill"></i></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-light" href="#contact"><i class="bi bi-cart-fill"></i></i></a>
                        </li>

                    </ul>
                </div>

            </div>
        </nav>
    </header>

    <!--main content--->
    <main>
        <div class="container-fluid mb-5">
            <div class="row gap-2 justify-content-center gap-4 ">

                <!---categories-->
                <div class="col-md-2 bg-white p-3 rounded bg-secondary">

                    <h5 class="text-center mb-3">CATEGORIES</h5>

                    <hr>

                    <div>

                        <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Default checkbox
                        </label>
                        </div>

                        <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Default checkbox
                        </label>
                        </div>

                        <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Default checkbox
                        </label>
                        </div>
                        <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Default checkbox
                        </label>
                        </div>
                        <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Default checkbox
                        </label>
                        </div>
                        <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Default checkbox
                        </label>
                        </div>

                    </div>

                </div>

                <!---shopping cards-->
                <div class="col-md-9 bg-white p-3 rounded vh-100">

                </div>

            </div>
        </div>
    </main>


    <!-- website footer -->
    <footer>
        <div class="container-fluid bg-dark px-5 opacity-100">
            <div class="row text-white text-center text-md-start py-4 ">

                <div class="col-md-3 mb-3">
                    <h5 class="mb-2">VELARIS APOTHECARY</h5>
                    <div>
                        <a href="#home" class="text-decoration-none text-white">
                            <img src="{{ asset('image/logo.png') }}" alt=""
                            class="img-fluid" style="height: 150px; width: 150px; object-fit: contain;">
                        </a>
                        <p class="mt-2">"At Velaris Apothecary, we believe health is more than science it's an art."</p>
                    </div>

                </div>

                <div class="col-sm-3 mb-3">
                    <h5>About Us</h5>
                    <p>
                        <strong>Velaris Apothecary</strong> is more than just a place to pick up prescriptions were your trusted partner in health and wellness.
                        Blending modern science with refined care, we provide premium health solutions designed to nurture balance,
                        beauty, and well-being. At Velaris, every product and service reflects our belief that caring for yourself should feel extraordinary.
                    </p>
                </div>

                <div class="col-sm-3 mb-3">
                    <h5 class="mb-2">Follow Us</h5>
                    <div>
                    <a href="" class="text-decoration-none text-white">
                    <i class="bi bi-facebook"></i>  facebook</a>
                    </div>
                    <div>
                        <a href="" class="text-decoration-none text-white">
                    <i class="bi bi-instagram"></i>  instagram</a>
                    </div>
                    <div>
                    <a href="" class="text-decoration-none text-white">
                    <i class="bi bi-telegram"></i>  telegram</a>
                    </div>
                    <div>
                    <a href="" class="text-decoration-none text-white">
                        <i class="bi bi-twitter-x"></i>  twitter-x</a>
                    </div>
                </div>

                <div class="col-sm-3 mb-3">
                    <h5 class="mb-2">Contact Info</h5>
                    <div>
                        <i class="bi bi-telephone-fill"> +09-0000-00</i>
                    </div>
                    <div>
                        <i class="bi bi-phone-fill"> +09544894580</i>
                    </div>
                    <div>
                        <a href="" class="text-decoration-none text-white">
                        <i class="bi bi-envelope"></i>  sdflk@gmail.com</a>
                    </div>
                    <div>
                        <i class="bi bi-geo-alt-fill"> #147 area 5b tandangsora avenue blk 345 lot 945 culiat quezon city, 1119</i>
                    </div>
                </div>

            </div>

        </div>
    </footer>

    <!--rights reserved-->
    <div class="container-fluid bg-black text-center text-white py-3">
        <p class="mb-0">&copy; 2024 VELARIS APOTHECARY. All rights reserved.</p>
    </div>



</body>
</html>
