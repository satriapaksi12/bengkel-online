@extends('mitra.layout.template')
@section('content')
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('mitra.layout.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <h1 class="text-white mb-4">Welcome, {{ auth()->user()->name }}</h1>

            @if ($mitra->nik == null)
            <div class="alert alert-danger" role="alert">
                Anda Belum Isi NIK
            </div>
            @endif
            @if ($mitra->npwp == null)
            <div class="alert alert-warning" role="alert">
                Isi NPWP Jika Ada
            </div>
            @endif
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-2">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <a href="list-pengajuan-store">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Stores Pengajuan
                                        </p>
                                    </a>
                                    <h5 class="font-weight-bolder">
                                        {{ $non_aktif}}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div
                                    class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                    <i class="ni ni-ruler-pencil text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-2">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <a href="/list-store">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Stores Active</p>
                                    </a>
                                    <h5 class="font-weight-bolder">
                                        {{ $aktif }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div
                                    class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                    <i class="ni ni-briefcase-24 text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-2">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <a href="/reject-bengkel">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Stores Reject</p>
                                    </a>
                                    <h5 class="font-weight-bolder">
                                        {{ $reject }}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div
                                    class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                    <i class="ni ni-bell-55 text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-2">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <a href="/banding-bengkel">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Stores Banding</p>
                                    </a>
                                    <h5 class="font-weight-bolder">
                                        {{ $banding}}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div
                                    class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                    <i class="ni ni-email-83 text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Produk</p>
                                    <h5 class="font-weight-bolder">
                                        {{ $item }}
                                    </h5>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div
                                    class="icon icon-shape bg-gradient-success shadow-warning text-center rounded-circle">
                                    <i class="ni ni-briefcase-24 text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



</main>
@endsection
