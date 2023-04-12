<head>
    <!-- My Style -->
    <link rel="stylesheet" href="{{ URL::asset('css/style_sidebar.css'); }}">
</head>
<aside class="sidenav w-auto bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="#" target="_blank">
            <!-- Nyoba bagian lipat sidebar -->
            <div class="main-content">
                <div id="menu-button">
                    <input type="checkbox" id="menu-checkbox">
                    <label for="menu-checkbox" id="menu-label">
                        <div id="hamburger"></div>
                    </label>
                </div>
            </div>
            <div class="dasboard">
                <span class="ms-5 font-weight-bold">Employe Dashboard </span>
            </div>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('profile') ? 'active' : '' }}" href="{{url('profile')}}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('validasi-bengkel') ? 'active' : '' }}" href="{{url('validasi-bengkel')}}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-book-bookmark text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Validasi Bengkel</span>
                    <!-- <span class="badge text-dark bg-primary text-bg-sucsess">4</span> -->

                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('list-bengkel') ? 'active' : '' }}" href="{{url('list-bengkel')}}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-briefcase-24 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Bengkel Aktif</span>
                </a>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('reject-bengkel') ? 'active' : '' }}" href="{{url('reject-bengkel')}}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-bell-55 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Reject Bengkel</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('banding-bengkel') ? 'active' : '' }}" href="{{url('banding-bengkel')}}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-email-83 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Banding Bengkel</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('list-mitra') ? 'active' : '' }}" href="{{url('list-mitra')}}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-badge text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">List Mitra Aktif</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('list-nonmitra') ? 'active' : '' }}" href="{{url('/list-nonmitra')}}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-badge text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">List Mitra Non-Aktif</span>
                </a>
            </li>
        </ul>
    </div>
    <script src="{{ URL::asset('js/sidebar.js') }}"></script>
</aside>