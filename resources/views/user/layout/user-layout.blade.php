<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/argon/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/argon/img/favicon.png">
    <!-- Tailwind -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>
        User Dashboard
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="/argon/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/argon/css/nucleo-svg.css" rel="stylesheet" />
    <link href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.
        "></script>
        <script src="{{ mix('js/app.js') }}" defer></script>
        <!--Map-->
        <link rel = "stylesheet" href = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
        <script src = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="/argon/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="/argon/css/argon-dashboard.css?v=2.0.2" rel="stylesheet" />
    <style>
        @media only screen and (max-width: 719px) {
            #show {
                height: 200vw;
                width:100%;
                z-index: 1;
            }

            .web-menu{
                display: none;
            }

            #mobile-nav{
                position: fixed;
                bottom: -1px;
                z-index:12;
            }
        }
        @media only screen and (min-width: 720px) {
            #show {
                height: 50vw;
                width:100%;
                z-index: 1;
            }

            .mobile-menu{
                display: none;
            }

            #mobile-nav{
                display: none;
            }
        }
    </style>
</head>

<body class="g-sidenav-show">
    {{-- <div class="min-height-300 bg-primary position-absolute w-100"></div> --}}
    {{-- @include('SuperAdmin.adminsidebar') --}}
    @yield('content')
    <script src="/argon/js/core/popper.min.js"></script>
    <script src="/argon/js/core/bootstrap.min.js"></script>
    <script src="/argon/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/argon/js/plugins/smooth-scrollbar.min.js"></script>
</body>
</html>
