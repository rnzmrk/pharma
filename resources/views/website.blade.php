    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!----css and js file---->
            @vite(['resources/css/app.css', 'resources/js/app.js'])
            <!-----logo------>
            <link rel="icon" href="{{ asset('image/logo.png') }}">
            <!--------page title------>
            <title>VELARIS APOTHECARY</title>

        </head>
        <body>

            <!-- Website Navbar -->
            <header class=" sticky-top">
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
                                    <a class="nav-link text-light" href="#feature">FEATURES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#about">ABOUT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#service">SERVICES</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#contact">CONTACT</a>
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
            <main id="home">

                <!-- Website Background Section -->
                <div class="container-fluid position-relative vh-100 p-0">

                    <!-- Background Image -->
                    <img src="{{ asset('image/blackbg.jpg') }}" alt="Background"
                    class="w-100 h-100 height: 200px; object-fit-cover position-absolute top-0 start-0">

                    <!-- MAIN TEXT -->
                    <div class="d-flex justify-content-center align-items-center vh-100 position-relative text-white">
                        <div class="text-center">
                            <h1 class="display-4 fw-bold" id="maintext" >VELARIS APOTHECARY</h1>
                            <p>"At Velaris Apothecary, we believe health is more than science it's an art."</p>
                        </div>
                    </div>

                </div>

            </main>

            <!--website courosel /FEATURES--->
            <section id="feature">

                <!--carousel-->
                <div class="contianer-fluid bg-black mb-3">
                    <div class="row justify-content-center">

                        <!--header text----->
                        <div class="col-md-12 d-flex justify-content-center alighn-items-center py-2">
                            <h1 class="text-white mb-3">FEATURES PRODUCTS</h1>
                        </div>

                        <!--carousel-->
                        <div class="col-md-6 py-2 mb-5">

                            <!--auto playing carousel-->
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">

                                    <div class="carousel-item active">
                                    <img src="{{ asset('image/pic1.jpg') }}" class="d-block w-100" style="height: 300px; object-fit: contain;" alt="med1">
                                    </div>

                                    <div class="carousel-item">
                                    <img src="{{ asset('image/pic2.jpg') }}" class="d-block w-100" style="height: 300px; object-fit: contain;" alt="med2">
                                    </div>

                                    <div class="carousel-item">
                                    <img src="{{ asset('image/pic3.jpg') }}" class="d-block w-100" style="height: 300px; object-fit: contain;" alt="med3">
                                    </div>

                                    <div class="carousel-item">
                                    <img src="{{ asset('image/pic4.jpg') }}" class="d-block w-100" style="height: 300px; object-fit: contain;" alt="med4">
                                    </div>

                                    <div class="carousel-item">
                                    <img src="{{ asset('image/pic5.webp') }}" class="d-block w-100" style="height: 3    00px; object-fit: contain;" alt="med5">
                                    </div>

                                </div>
                            </div>

                        </div>

                        <!---product--->
                        <div class="row mb-5 d-flex justify-content-center align-items-center gap-5">

                                <div class="col-sm-3 card" style="width: 18rem;">
                                    <img src="{{ asset('image/c1.jpg') }}" alt="..."
                                     class="card-img-top img-fluid"
                                     style="height: 250px; object-fit: obtain;">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Rimu Health</h5>
                                            <p class="card-text text-muted text-center fs-6">
                                                 Natural wellness solutions crafted to support your everyday vitality and balance.
                                            </p>
                                        </div>
                                </div>

                                <div class="col-sm-3 card" style="width: 18rem;">
                                    <img src="{{ asset('image/c2.jpg') }}" alt="..."
                                     class="card-img-top img-fluid"
                                     style="height: 250px; object-fit: obtain;">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">The Ordinary</h5>
                                            <p class="card-text text-muted text-center fs-6">
                                                 Science-driven skincare that delivers real results with simple, effective formulas.
                                            </p>
                                        </div>
                                </div>

                                <div class="col-sm-3 card" style="width: 18rem;">
                                    <img src="{{ asset('image/c3.jpg') }}" alt="..."
                                     class="card-img-top img-fluid"
                                     style="height: 250px; object-fit: obtain;">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">The Ordinary</h5>
                                            <p class="card-text text-muted text-center fs-6">
                                                 Dermatologist-recommended care that restores and protects your skins natural barrier.
                                            </p>
                                        </div>
                                </div>

                                <div class="col-sm-3 card" style="width: 18rem;">
                                    <img src="{{ asset('image/c5.jpg') }}" alt="..."
                                     class="card-img-top img-fluid"
                                     style="height: 250px; object-fit: obtain;">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">The Ordinary</h5>
                                            <p class="card-text text-muted text-center fs-6 ">
                                                Advanced skincare formulated with dermatological expertise and soothing ingredients.
                                            </p>
                                        </div>
                                </div>


                        </div>

                    </div>
                </div>

            </section>

            <!--ABOUT US--->
            <section id="about">
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
                                <strong>VELARIS APOTHECARY</strong> is more than just a place to pick up prescriptions were your neighborhood health partner.
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
                                    <img src="{{ asset('image/peg1.gif') }}" class="img-fluid rounded" style="height: auto; object-fit: contain" alt="">
                            </div>

                        </div>

                    </div>
                </div>
            </section>

            <!--services-->
            <section id="service">
                <div class="container-fluid bg-black py-3 mb-5">
                    <div class="bg-white rounded mb-5">
                        <div class="row">

                            <div class="col-md-12 d-flex justify-content-center alighn-items-center pt-2">
                                <h1>SERVICES</h1>
                            </div>

                            <div class="row d-flex justify-content-center align-items-center g-3 px-3 py-1 mb-5">

                                <!--services--->
                                <div class="col-sm-3">
                                    <div class="card h-100 shadow-lg">
                                        <img src="{{ asset('image/ser2.jpg') }}" alt=""
                                        class="image-fluid rounded" style="height: 400px; object-fit: cover;">
                                        <div class="card-body">
                                            <h5 class="card-title">Fast & Discreet Home Delivery</h5>
                                            <p class="card-text">
                                                Enjoy convenient, secure delivery right to your doorstep.
                                                Our packaging ensures your privacy while maintaining
                                                the premium quality and safety of every order.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="card h-100 shadow-lg">
                                        <img src="{{ asset('image/ser1.jpg') }}" alt=""
                                        class="image-fluid rounded" style="height: 400px; object-fit: cover;">
                                        <div class="card-body">
                                            <h5 class="card-title">Online Ordering</h5>
                                            <p class="card-text">
                                                Skip the lines and manage your prescriptions effortlessly.
                                                Order and refill your medications online, and well prepare
                                                them with care and precision ready for delivery or pickup.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="card h-100 shadow-lg">
                                        <img src="{{ asset('image/ser3.jpg') }}" alt=""
                                        class="image-fluid rounded" style="height: 400px; object-fit: cover;">
                                        <div class="card-body">
                                            <h5 class="card-title">Click & Collect Service</h5>
                                            <p class="card-text">
                                                Order online and pick up in-store at your convenience.
                                                Well prepare your items in advance, so your visit is fast,
                                                easy, and hassle-free.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!--shop guide-->
                    <div class="row d-flex justify-content-center align-items-center">
                        <h1 class="text-center text-white">HOW TO SHOP WITH US</h1>
                        <p class=" mb-5 text-center text-white">Follow these simple steps to complete your purchase easily and securely.</p>

                        <img src="{{ asset('image/1.jpg') }}" alt=""
                        class="img-fluid px-5"
                        style="height: auto; max-height: 600px; object-fit: obtain;">

                    </div>

                </div>
            </section>

            <!--contact-->
            <section id="contact">
                <div class="container bg-white shadow-lg rounded py-4 mb-3">
                    <div class="row">

                        <div class="col-md-12 d-flex justify-content-center alighn-items-center mb-3">
                            <div class="text-center">
                                <h1>CONTACT US</h1>
                                <p class="text-muted">
                                    We d love to hear from you! Whether you have questions,
                                    feedback, or partnership inquiries, feel free to reach out.
                                </p>
                            </div>
                        </div>

                        <div class="row mb-3 p-5 gap-5 d-flex justify-content-center align-items-center">

                            <div class="col-md-5 p-3 rounded shadow-lg">
                                    <form action="">
                                        <h5 class="text-center fs-3">Feedback</h5>
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" placeholder="enter name">
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="text" class="form-control" placeholder="enter email">
                                        </div>

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Message</label>
                                            <textarea type="text" class="form-control" placeholder="type h ere"></textarea>
                                        </div>

                                        <div class="mb-3 d-flex justify-content-center align-items-center">
                                            <button class="btn btn-primary">Send Message</button>
                                        </div>

                                    </form>
                            </div>

                            <div class="col-md-5 p-3 rounded shadow-lg h-100">
                                <h5 class="mb-5 text-center fs-3">Contact Info</h5>
                                <div class="fs-5 mb-3">
                                    <i class="bi bi-telephone-fill"> +09-0000-00</i>
                                </div>
                                <div class="fs-5 mb-3">
                                    <i class="bi bi-phone-fill"> +09544894580</i>
                                </div>
                                <div class="fs-5 mb-3">
                                    <a href="" class="text-decoration-none text-black">
                                    <i class="bi bi-envelope"></i>  sdflk@gmail.com</a>
                                </div>
                                <div class="fs-5 mb-3">
                                    <i class="bi bi-geo-alt-fill">
                                        #147 area 5b tandangsora avenue blk 345 lot 945 culiat quezon city, 1119
                                    </i>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12 d-flex justify-content-center align-items-center">
                            <div>

                                <div class="text-center mb-5">
                                    <h4>GET IN TOUCH</h4>
                                </div>

                                <div class="d-flex justify-between align-items-center gap-3">
                                    <a href="#" class="text-decoration-none text-black p-3 rounded-circle shadow-lg">
                                    <i class="bi bi-facebook display-1"></i></a>

                                    <a href="#" class="text-decoration-none text-black p-3 rounded-circle shadow-lg">
                                    <i class="bi bi-instagram display-1"></i></a>

                                    <a href="#" class="text-decoration-none text-black p-3 rounded-circle shadow-lg">
                                    <i class="bi bi-telegram display-1"></i></a>

                                    <a href="#" class="text-decoration-none text-black p-3 rounded-circle shadow-lg">
                                    <i class="bi bi-twitter-x display-1"></i></a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- website footer -->
            <footer>
                <div class="container-fluid bg-dark px-5 opacity-100">
                    <div class="row text-white text-center text-md-start py-4">

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
