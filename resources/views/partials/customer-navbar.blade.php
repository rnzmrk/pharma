<!-- customer Navbar -->
<header class=" sticky-top mb-3">
    <nav class="navbar navbar-expand-lg bg-black ">
        <div class="container-fluid">

            <!-- Website Logo / Name -->
            <a class="navbar-brand text-light" href="{{ route('customer.home') }}">
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
                        <a class="nav-link text-light" aria-current="page" href="{{ route('customer.home') }}">HOME</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('customer.order') }}">ORDER</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('customer.history') }}">HISTORY</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('customer.profile') }}"><i class="bi bi-person-fill"></i></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('customer.cart') }}"><i class="bi bi-cart-fill"></i></i></a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <form method="POST" action="{{ route('logout') }}" class="m-0">
                            @csrf
                            <button type="submit" class="btn nav-link text-light p-0 border-0 bg-transparent">Logout</button>
                        </form>
                    </li>

                </ul>
            </div>

        </div>
    </nav>
</header>
