@extends('mitra.layout.template')
@section('content')
    <div class="container">
        {{-- Notifikasi Error --}}
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @endforeach
            </ul>
        @endif
        {{-- Notifikasi Update --}}
        @if (session('status_update'))
            <div class="alert alert-success">
                {{ session('status_update') }}
            </div>
        @endif
        @if (session('status_update_fail'))
            <div class="alert alert-danger">
                {{ session('status_update_fail') }}
            </div>
        @endif
        <br>
        <div class="container">
            <img style="max-width: 50px; height:auto; border-radius:50%;"
                src="{{ asset('data_user/' . $user->id . '/profile/' . $user->profile_photo_path) }}"
                alt="{{ $user->profile_photo_path }}">
        </div>
        <a href="{{ url('otp-confirmation') }}">Ubah Email Password</a>
        <form method="post" action="{{ url('profile') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ $user->email }}"
                    readonly aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pengguna</label>
                <input type="text" name="name" class="form-control" id="nama" value="{{ $user->name }}">
            </div>
            <div class="mb-3">
                <label for="pp" class="form-label">Update Foto Profile</label>
                <input type="file" name="profile" class="form-control" id="pp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
