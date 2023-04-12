@extends('admin.adminlayout')
@section('content')

<main class="main-content position-relative border-radius-lg ">
  <!-- Navbar -->
  @include('admin.navbar')
  <!-- End Navbar -->

  <br>
  <div class="container">
    <div class="fixed-bottom card card-frame vstack gap-2 col-md-5 mx-auto ">
      <!-- tampilan foto diprofil -->
      <div class="position-relative">
        <div class="position-absolute top-50 start-50 translate-middle">
          <div class="col-md-17 mx-auto">
            <img style="max-width: 100px; height: 100px; border-radius:50%; " src="{{ asset('data_user/'.$user->id.'/profile/'.$user->profile_photo_path) }}" alt="{{$user->profile_photo_path}}">
          </div>
        </div>
      </div>
      <div class="card-body">
        {{-- Notifikasi Error --}}
        @if ($errors->any())
        <ul>
          @foreach ($errors->all() as $error)
          <div class="alert alert-danger mx-auto alert-dismissible fade show" role="alert">
            {{ $error }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endforeach
        </ul>
        @endif
        {{-- Notifikasi Update --}}
        @if (session('status_update'))
        <div class="alert alert-success text-center mx-auto alert-dismissible fade show" role="alert">
          {{ session('status_update') }}
          <strong>Success!</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        <form method="post" action="{{url('profile')}}" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{$user->email}}" readonly aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Pengguna</label>
            <input type="text" name="name" class="form-control" id="nama" value="{{$user->name}}">
          </div>
          <div class="mb-3">
            <label for="pp" class="form-label">Update Foto Profile</label>
            <input type="file" name="profile" class="form-control" id="pp">
          </div>
          <div class="d-grid gap-2 mx-auto">
            <button class="btn btn-success" type="submit">Submit</button>
            <a class="btn btn-primary" href="/otp-confirmation" role="button">Update Email/Password</a>
          </div>
          
        </form>
      </div>
    </div>
  </div>
</main>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
@endsection