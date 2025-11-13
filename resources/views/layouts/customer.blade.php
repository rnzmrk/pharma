<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!----css and js file---->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!--------page title------>
    <title>@yield('title', '')</title>

</head>
<body class="bg-black">

    <header>
        @include('partials.customer-navbar')
    </header>

    <!--main content--->
    <main>
        @yield('customer-main')
    </main>

    <!-- website footer -->
    <footer>
        @include('partials.customer-footer')
    </footer>

    <!--rights reserved-->
    <div class="container-fluid bg-black text-center text-white py-3">
        <p class="mb-0">&copy; 2024 VELARIS APOTHECARY. All rights reserved.</p>
    </div>

</body>
</html>
