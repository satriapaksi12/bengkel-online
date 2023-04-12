<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
    <title>{{ $title }}</title>
</head>

<body>
    <section id="banner" class="bg-gradient-to-r from-green-200 to-green-600">
        <livewire:search-item />
    </section>
    <section id="card text-center">
        <div class="container mx-auto justify-center">
            <div class="flex flex-wrap justify-center ">
                @yield('content')
            </div>
        </div>
    </section>
    @livewireScripts
</body>

</html>
