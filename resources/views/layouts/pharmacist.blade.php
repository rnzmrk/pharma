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
    <!--------page title------>
    <title>@yield('title', '')</title>

</head>
<body>

    <div class="container-fluid p-3" style="background-color: #EDEDED;">
        <div class="row">

            <aside class="col-md-3 col-lg-2">
                @include('partials.pharma-aside')
            </aside>

            <main class="col-md-9 col-lg-9">
                <div class="p-3 border border-black rounded bg-white">
                    @yield('pharma-main')
                </div>
            </main>
        </div>
    </div>


</body>
</html>

