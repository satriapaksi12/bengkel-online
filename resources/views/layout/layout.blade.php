<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ $title }}</title>
    @livewireStyles

    <script src="https://kit.fontawesome.com/3a7766bf6b.js" crossorigin="anonymous"></script>
</head>
<body>
    @yield('container')

    @livewireScripts
</body>
</html>
