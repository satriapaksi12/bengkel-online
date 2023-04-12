<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a>

                </li>
                <li class="breadcrumb-item text-sm text-white active">
                    @if (Request::is('dashboard'))
                    Dashboard
                    @elseif(Request::is('dashboard/create'))
                    Create Employee
                    @elseif(Request::is('dashboard/show'))
                    User List
                    @elseif(Request::is('list-bengkel'))
                    Bengkel Aktif
                    @elseif(Request::is('reject-bengkel'))
                    Reject Bengkel
                    @elseif(Request::is('banding-bengkel'))
                    Banding Bengkel
                    @endif
                </li>
            </ol>

        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">

            </div>
            <ul class="navbar-nav justify-content-end">
                <form action="/logout" method="post">
                    <button type="submit" class="btn btn-danger m-auto"> Logout </button>
                    @csrf
                </form>
            </ul>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</nav>