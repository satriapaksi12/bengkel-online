@extends('SuperAdmin.adminlayout')
@section('content')
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('SuperAdmin.navbar')
    <!-- End Navbar -->

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h4 style="float: left;">LIST USER</h4>
                        <div class="d-flex justify-content-between" style="float: right;">
                            <div class="input-group mb-4">
                                <span class="input-group-text text-body"><i class="fas fa-search"></i></span>
                                <input type="text" class="form-control" id="searchalluser" placeholder="Cari Mitra/Employee">

                            </div>
                        </div>
                        <!-- <div class="form-group" style="float: right;">
                            <div class="input-group mb-4">
                                <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                <input class="form-control" id="searchalluser" placeholder="Cari Mitra/Employee" type="text">
                            </div>
                        </div> -->
                        @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span class="alert-text"><strong>Success!</strong> {{ session('success') }}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Name</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Role</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody id='resultemployeemitra'>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="/argon/img/team-3.jpg" class="avatar avatar-sm me-3" alt="user2">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $user->name }}</h6>
                                                    <p class="text-xs text-secondary mb-0">{{ $user->email }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">
                                                {{ $user->roles->first()->name }}
                                            </p>
                                        </td>
                                        <td class="align-middle text-center">
                                            @if($user->roles->first()->name == 'employee')
                                            <a class="btn btn-link text-dark px-3 mb-0" href="/dashboard/{{ $user->id }}/edit"><i class="fas fa-pencil-alt text-dark me-2"></i>Edit</a>
                                            @endif
                                            <button type="button" class="btn bg-gradient-danger btn-block mb-3" data-bs-toggle="modal" data-bs-target="#delete{{$user->id}}">
                                                Delete
                                            </button>
                                            <br>
                                            <button type="button" class="btn bg-gradient-info btn-block mb-3" data-bs-toggle="modal" data-bs-target="#info{{$user->id}}">
                                                Informasi
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach ($users as $user)
    <!-- Modal Info Pengguna-->
    <div class="modal fade" id="info{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Data Pengguna</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nama Pengguna:</label>
                            <input type="text" value="{{$user->name}}" class="form-control" value="Creative Tim" id="recipient-name" readonly>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Email:</label>
                            <input type="text" class="form-control" id="message-text" value="{{$user->email}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">NIK:</label>
                            <input type="text" class="form-control" id="message-text" value="{{$user->nik}}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">NPWP:</label>
                            <input type="text" class="form-control" id="message-text" value="{{$user->npwp}}" readonly>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal Delete Pengguna --}}
    <div class="modal fade" id="delete{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-notification">Perhatian!!!</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="py-3 text-center">
                        <i class="ni ni-bell-55 ni-3x"></i>
                        <h4 class="text-gradient text-danger mt-4">Konfirmasi Hapus Pengguna!</h4>
                        <p>Apakah Anda Yakin Untuk Menghapus {{$user->name}} ?</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <form action="{{url('delete-employee').'/'.$user->id}}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Yakin</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</main>
@endsection