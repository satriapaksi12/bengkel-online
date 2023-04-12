@extends('admin.adminlayout')
@section('content')
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('admin.navbar')
    <!-- End Navbar -->
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <h1 class="text-white mb-4">LIST MITRA</h1>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-lg-12 mb-lg-0 mb-2">
            <div class="table-responsive p-3">
                <li class="card card-frame col-md-12">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <div class="form-group">
                                <div class="input-group mb-4">
                                    <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                    <input class="form-control" id="searchmitra" placeholder="Cari Mitra"
                                        type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <table class="table align-items-center ">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id='resultmitra'>
                                @foreach ($users as $user)
                                <tr class="text-center">
                                    <td class="pt-3">{{$loop->iteration}}</td>
                                    <td class="pt-3">{{$user->name}}</td>
                                    <td class="pt-3">{{$user->roles->first()->display_name}}</td>
                                    <td>
                                    @if(Request::is('list-mitra'))
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#nonactive{{$user->id}}">Non Aktif</button>
                                    @elseif(Request::is('list-nonmitra'))
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#active{{$user->id}}">Aktif</button>                                    
                                    @endif
                                    <a href="{{ url('delete-mitra/'.$user->id.'') }}"><button class="btn btn-danger" onclick="return confirm('Apakah Yakin Ingin Menghapus?')">Delete</button></a>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </li>
            </div>
        </div>
    </div>
</main>
@foreach ($users as $user)
  {{-- Modal Non-Aktive --}}
  <div class="modal fade" id="nonactive{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="modal-title-default">Non Aktivasi Mitra</h6>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="{{url('non-aktif/'.$user->id)}}" method="POST">
        @csrf
        <div class="modal-body">
          <p>Apakah anda yakin untuk nonaktifkan Mitra : "{{$user->name}}"</p>
          <p>Nama Mitra : {{$user->name}}</p>
          <p>Email : {{$user->email}}</p>
          <p>NIK : {{$user->nik}}</p>
          <br>
        </div>
        <div class="modal-footer">
        <input type="hidden" name="id" value="{{$user->id}}">
        <input type="hidden" name="created_at" value="null">
        <input type="hidden" name="email" value="{{ $user->email }}">
          <button type="submit" class="btn bg-gradient-danger">Save changes</button>
          <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
        </form>
        </div>
      </div>
    </div>
</div>

{{-- Modal Aktive --}}
<div class="modal fade" id="active{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title" id="modal-title-default">Aktivasi Mitra</h6>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="{{url('aktif/'.$user->id)}}" method="POST">
        @csrf
        <div class="modal-body">
          <p>Apakah anda yakin untuk aktifkan Mitra : "{{$user->name}}"</p>
          <p>Nama Mitra : {{$user->name}}</p>
          <p>Email : {{$user->email}}</p>
          <p>NIK : {{$user->nik}}</p>
          <br>
        </div>
        <div class="modal-footer">
        <input type="hidden" name="id" value="{{$user->id}}">
        {{-- <input type="date" name="created_at" value=""> --}}
        <input type="hidden" name="email" value="{{ $user->email }}">
          <button type="submit" class="btn bg-gradient-danger">Save changes</button>
          <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
        </form>
        </div>
      </div>
    </div>
</div>

{{-- Modal Non-Aktive --}}
<div class="modal fade" id="nonactive{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-default"
    aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-default">Non Aktivasi Mitra</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{url('non-aktif/'.$user->id)}}" method="POST">
                @csrf
                <div class="modal-body">
                    <p>Apakah anda yakin untuk nonaktifkan Mitra : "{{$user->name}}"</p>
                    <p>Nama Mitra : {{$user->name}}</p>
                    <p>Email : {{$user->email}}</p>
                    <p>NIK : {{$user->nik}}</p>
                    <br>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <input type="hidden" name="created_at" value="null">
                    <input type="hidden" name="email" value="{{ $user->email }}">
                    <button type="submit" class="btn bg-gradient-danger">Save changes</button>
                    <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
            </form>
        </div>
    </div>
</div>
</div>
{{-- Modal Delete Pengguna --}}
<div class="modal fade" id="delete{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-notification"
    aria-hidden="true">
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
                <form action="{{url('delete-mitra').'/'.$user->id}}" method="post" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger">Yakin</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
