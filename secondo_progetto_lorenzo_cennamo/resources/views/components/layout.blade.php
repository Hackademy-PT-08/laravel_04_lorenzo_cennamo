<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <x-navbar/>

        <div class="container-fluid bg-black my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="text-center text-white">{{ $titolo }}</h1>
                </div>
            </div>
        </div>

        {{ $slot }}

    </body>
</html>