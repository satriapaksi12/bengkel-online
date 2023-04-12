@extends('SuperAdmin.adminlayout')
@section('content')
    <div class="main-content position-relative max-height-vh-100 h-100">
        <!-- Navbar -->
        @include('SuperAdmin.navbar')
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            @if (session()->has('success'))
                <div class="alert alert-primary" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger" role="alert">
                    {{ session('loginError') }}
                </div>
            @endif
            <form action="{{ url('create-employee') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="d-flex align-items-center">
                                    <p class="mb-0">Create Employee</p>
                                    <!-- <button type="submit" class="btn btn-success btn-sm ms-auto">Save</button> -->
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="text-uppercase text-sm">Isi Informasi User</p>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name"
                                                class="form-control-label  @error('name') is-invalid @enderror">Name</label>
                                            <input class="form-control" name="name" type="text"
                                                value="{{ old('name') }}">
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nik"
                                                class="form-control-label @error('nik') is-invalid @enderror">NIK</label>
                                            <input class="form-control" name="nik" type="text" value="{{ old('nik') }}">
                                            @error('nik')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <hr class="horizontal dark">
                                <p class="text-uppercase text-sm">Credentials</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="form-control-label">Email address</label>
                                            <input class="form-control @error('email') is-invalid @enderror" name="email"
                                                type="email" value="{{ old('email') }}">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect2">Role</label>
                                            <select class="form-control" id="exampleFormControlSelect2" name="role">
                                                @foreach ($roles as $role)
                                                    @if($role->name != 'mitra')
                                                        <option value={{ $role->id }}>{{ $role->display_name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input"
                                                class="form-control-label  @error('password') is-invalid @enderror">Password</label>
                                            <input class="form-control" type="password" name="password" required
                                                autocomplete="new-password" value="{{ old('password') }}">
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Repeat
                                                Password</label>
                                            <input class="form-control" type="password" name="password_confirmation"
                                                required autocomplete="new-password" value="">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-sm ms-auto mt-4">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
