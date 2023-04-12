@extends('admin.adminlayout')
@section('content')
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('admin.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            @if(Request::is('list-bengkel'))
            <h1 class="text-white mb-4">LIST BENGKEL AKTIF</h1>
            @elseif(Request::is('reject-bengkel'))
            <h1 class="text-white mb-4">REJECT BENGKEL</h1>
            @endif
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4 p-3">
            <div class="card">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex justify-content-between">
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search"></i></span>
                            <input type="text" class="form-control" id="searchbengkelaktif" data-status={{$data}} placeholder="Cari Bengkel Aktif" type="text">
                           
                        </div>
                    </div>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center ">
                        <tbody>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama Bengkel</th>
                                <th>Pemilik</th>
                                <th>Email</th>
                                <th>Kecamatan</th>
                                <th>Kota</th>
                                <th>Action</th>
                            </tr>
                            <thead>
                            <tbody id="resultbengkelaktif">
                                @foreach($stores as $s)
                                <tr class="text-center">
                                    <td>
                                        {{$loop->iteration}}
                                    </td>
                                    <td>
                                        {{$s->store_name}}
                                    </td>
                                    <td>
                                        {{$s->users->name}}
                                    </td>
                                    <td>
                                        {{$s->users->email}}
                                    </td>
                                    <td>
                                        {{$s->kecamatan->name}}
                                    </td>
                                    <td class="align-middle text-sm">
                                        {{$s->kecamatan->kota->name}}
                                    </td>
                                    <td class="align-middle text-sm">
                                        @if(Request::is('list-bengkel'))
                                        @if($s->status_activation == 1)
                                        <button type="button" class="btn btn-block bg-gradient-danger mb-3" data-bs-toggle="modal" data-bs-target="#deactive{{$s->id}}">
                                            Nonaktif
                                        </button>
                                        @endif
                                        @endif
                                        <button type="button" class="btn btn-block bg-gradient-info mb-3" data-bs-toggle="modal" data-bs-target="#detail{{$s->id}}">
                                            Detail
                                        </button>
                                        <a href={{ "delete-bengkel/" . $s->id}}><button type="button" class="btn btn-block bg-gradient-danger mb-3" onclick="return confirm('Apakah Yakin Ingin Menghapus?')">
                                                Delete
                                            </button></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                    
                        </tbody>
                
                    </div>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</main>
@foreach ($stores as $s)
{{-- Modal Non-Aktive --}}
<div class="modal fade" id="deactive{{$s->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-default">Non Aktivasi Bengkel</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{url('reject-bengkel/'.$s->id)}}" method="POST">
                @csrf
                <div class="modal-body">
                    <p>Apakah anda yakin untuk nonaktifkan Bengkel "{{$s->store_name}}"</p>
                    <p>Pemilik : {{$s->users->name}}</p>
                    <p>Email : {{$s->users->email}}</p>
                    <p>NIK : {{$s->users->nik}}</p>
                    <p>Alasan :</p>
                    <textarea class="form-control" name="alasan" aria-label="With textarea" required></textarea>
                    <br>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" value="{{$s->id}}">
                    <input type="hidden" name="status" value="{{ $s->status_activation }}">
                    <input type="hidden" name="email" value="{{ $s->users->email }}">
                    <button type="submit" class="btn bg-gradient-danger">Save
                        changes</button>
                    <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
            </form>
        </div>
    </div>
</div>
</div>
{{-- Modal Detail --}}
<div class="modal fade" id="detail{{ $s->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Data Bengkel Aktif</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nama
                            Bengkel:</label>
                        <input type="text" class="form-control" value="{{ $s->store_name }}" id="recipient-name" readonly>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Pemilik:</label>
                        <input type="text" class="form-control" value="{{ $s->users->name }}" id="recipient-name" readonly>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Telefon
                            Bengkel:</label>
                        <input type="text" class="form-control" value="{{ $s->phone_store }}" id="recipient-name" readonly>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Tanggal
                            Diajukan:</label>
                        <input type="text" class="form-control" value="{{ $s->updated_at }}" id="recipient-name" readonly>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection