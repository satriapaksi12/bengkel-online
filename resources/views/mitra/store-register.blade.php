@extends('mitra.layout.template')
@section('content')
<div class="main-content position-relative max-height-vh-100 h-100">
    {{-- Navbar --}}
    @include('mitra.layout.navbar')
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

        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <!--Notification-->

        <form action="{{url('store-register')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Tambah Bengkel</p>
                               
                            </div>
                        </div>
                        <div class="card-body">
                            <h6>INFORMASI BENGKEL</h6>
                            <div class="row">
                                <div class="col-md-15">
                                    <div class="form-group">
                                        <label for="name"
                                            class="form-control-label  @error('store_name') is-invalid @enderror">Nama
                                            Bengkel</label>
                                        <input class="form-control" type="text" name="store_name"
                                            placeholder="Nama Bengkel">
                                        @error('store_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <h6>CREDENTIALS</h6>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="open"
                                            class="form-control-label  @error('open') is-invalid @enderror">Jam
                                            Buka</label>
                                        <input class="form-control" name="open" type="time" value="{{ old('open') }}">
                                        @error('open')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="close"
                                            class="form-control-label  @error('close') is-invalid @enderror">Jam
                                            Tutup</label>
                                        <input class="form-control" id="close" name="close" type="time"
                                            value="{{ old('close') }}">
                                        @error('close')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="col-md-6">
                                    <label for="kota"
                                        class="form-control-label">Kabupaten/Kota</label>
                                    <select name="id_kota" id="kota" class="form-control">
                                        <option value="">Pilih Kota</option>
                                        @foreach ($kota as $ko)
                                            <option value="{{ $ko->id }}">{{ $ko->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="kecamatan"
                                        class="form-control-label  @error('id_kecamatan') is-invalid @enderror">Kecamatan</label>
                                    <select name="id_kecamatan" id="kecamatan" class="form-control">
                                        <option value="">Pilih Kota Dahulu</option>
                                    </select>
                                </div>
                                <div class="mb-3 mt-3">
                                <br>

                                <div class="mb-3">

                                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                    <textarea class="form-control" name="address" id="exampleFormControlTextarea1"
                                        rows="3">
                                        @error('address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1"
                                        placeholder="08xxxxxxxxxx" name="phone_store" value="{{ old('phone_store') }}">
                                    @error('phone_store')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Foto Toko</label>
                                    <input class="form-control" type="file" id="formFile" name="store_image">
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


