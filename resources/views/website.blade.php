<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!----css and js file---->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
{{--  --}}
        <!--------page title------>S
        <title>Document</title>

    </head>
    <body>

        <div class="bg-black mb-3">
            <h1 class="text-white">sfdhnjknsdkj</h1>
            <button class="p-2 btn bg-primary">lsjdlgjkdl</button>
        </div>

        <div class="mb-3">
            @livewire('clicker')
        </div>

    </body>
</html>
