@extends('admin.adminlayout')
@section('content')
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('admin.navbar')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            @if(Request::is('validasi-bengkel'))
            <h1 class="text-white mb-4">VALIDASI BENGKEL</h1>
            @elseif(Request::is('banding-bengkel'))
            <h1 class="text-white mb-4">BANDING BENGKEL</h1>
            @endif
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card ">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex justify-content-between">
                        <div class="form-group">
                            <div class="input-group mb-4">
                                <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                <input class="form-control" id="searchbengkelaktifemp" data-status={{$data}}
                                    placeholder="Cari Bengkel Aktif" type="text">
                            </div>
                        </div>
                    </div>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="table-responsive p-3">
                    <table class="table align-items-center ">
                        <tbody>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama Bengkel</th>
                                <th>Alamat</th>
                                <th>Kecamatan</th>
                                <th>Kota</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="resultbengkelemployee">
                            @foreach($stores as $s)
                            <tr class="text-center">
                                <td>
                                    {{$loop->iteration}}
                                </td>
                                <td>
                                    {{$s->store_name}}
                                </td>
                                <td class="align-middle text-sm">
                                    {{$s->address}}
                                </td>
                                <td class="align-middle text-sm">
                                    {{$s->kecamatan->name}}
                                </td>
                                <td class="align-middle text-sm">
                                    {{$s->kecamatan->kota->name}}
                                </td>
                                <td class="align-middle text-sm">
                                    {{$s->updated_at}}
                                </td>
                                <td class="align-middle text-sm">
                                    @if($s->lat != NULL && $s->long != NULL)
                                    <button type="button" class="btn bg-gradient-warning" data-bs-toggle="modal"
                                        data-bs-target="#act{{$s->id}}">
                                        Aktifkan
                                    </button>
                                    @else
                                    <button type="button" class="btn bg-gradient-success" data-bs-toggle="modal"
                                        data-bs-target="#conf{{$s->id}}">
                                        Konfirm
                                    </button>
                                    @endif
                                    <button type="button" class="btn bg-gradient-danger" data-bs-toggle="modal"
                                        data-bs-target="#rej{{$s->id}}">
                                        Reject
                                    </button>
                                    <button class="btn text-white" style="background-color: red">
                                        Delete
                                    </button>
                                    <button type="button" class="btn btn-block bg-gradient-info mb-3"
                                        data-bs-toggle="modal" data-bs-target="#detail{{$s->id}}">
                                        Detail
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
</main>
@foreach ($stores as $s)
<!--Modal Aktivasi-->
<div class="modal fade" id="act{{$s->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-default"
    aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-default">Aktivasi Bengkel</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin untuk aktifkan Bengkel "{{$s->store_name}}"</p>
                <p>Pemilik : {{$s->users->name}}</p>
                <p>Email : {{$s->users->email}}</p>
                <p>NIK : {{$s->users->nik}}</p>
            </div>
            <div class="modal-footer">
                <form action="{{url('aktif-bengkel')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$s->id}}">
                    <input type="hidden" name="status" value="{{ $s->status_activation }}">
                    <input type="hidden" name="email" value="{{ $s->users->email }}">
                    <button type="submit" class="btn bg-gradient-danger">Save changes</button>
                    <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Detail -->
<div class="modal fade" id="detail{{$s->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message to @CT</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nama Bengkel:</label>
                        <input type="text" class="form-control" value="{{$s->store_name}}" id="recipient-name" readonly>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Pemilik:</label>
                        <input type="text" class="form-control" value="{{$s->users->name}}" id="recipient-name"
                            readonly>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Email:</label>
                        <input type="text" class="form-control" value="{{$s->users->email}}" id="recipient-name"
                            readonly>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Telefon Bengkel:</label>
                        <input type="text" class="form-control" value="{{$s->phone_store}}" id="recipient-name"
                            readonly>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Tanggal Diajukan:</label>
                        <input type="text" class="form-control" value="{{$s->updated_at}}" id="recipient-name" readonly>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--Modal Reject-->
<div class="modal fade" id="rej{{$s->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Reject Bengkel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" action="{{ url('reject-bengkel/'.$s->id) }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nama
                            Bengkel:</label>
                        <input type="text" class="form-control" value="{{$s->store_name}}" id="recipient-name" readonly>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Pemilik:</label>
                        <input type="text" class="form-control" value="{{$s->users->name}}" id="recipient-name"
                            readonly>
                        <input type="hidden" class="form-control" name="email" value="{{$s->users->email}}"
                            id="recipient-name" readonly>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">NIK
                            Pemilik:</label>
                        <input type="text" class="form-control" value="{{$s->users->nik}}" id="recipient-name" readonly>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Masukkan
                            Alasan:</label>
                        <textarea class="form-control" name="alasan" aria-label="With textarea" required></textarea>
                        <input type="hidden" value="2" name='test'>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn bg-gradient-warning" data-bs-dismiss="modal">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--Modal Konfirmasi-->
<div class="modal fade" id="conf{{$s->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card card-plain">
                    <div class="card-header pb-0 text-left">
                        <h3 class="font-weight-bolder text-info text-gradient">
                            Konfirmasi Bengkel</h3>
                        <p class="mb-0">{{$s->store_name}}</p>
                        <div class="alert alert-danger" role="alert">
                            <strong>Perhatian!</strong> Pastikan Konfimasi Saat Dilokasi
                            Bengkel
                        </div>
                    </div>
                    <div class="card-body">
                        <form role="form text-left" method="post" action="{{url('validasi-bengkel')}}">
                            @csrf
                            <label>Lattitude</label>
                            <div class="input-group mb-3">
                                <input type="email" name="lat" class="form-control" id="lat{{$s->id}}" readonly required>
                                <input type="hidden" name="id" class="form-control" value="{{$s->id}}">
                                <input type="hidden" name="status_activation" class="form-control" value="1">
                            </div>
                            <label>Longtitude</label>
                            <div class="input-group mb-3">
                                <input type="email" name="long" class="form-control" id="long{{$s->id}}" readonly required>
                            </div>
                            <div class="text-center">
                                <button type="submit"
                                    class="btn btn-round bg-gradient-success btn-lg w-100 mt-4 mb-0">Konfirmasi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
<script>
    var data = {!!json_encode($loc) !!}
    navigator.geolocation.getCurrentPosition(getLatLon);
    function getLatLon(position) {
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
        for (var i = 0; i < data.length; i++) {
            console.log(data[i][0]);
            var input1 = document.getElementById('lat'+data[i][0]);
            var input2 = document.getElementById('long'+data[i][0]);
            input1.value = latitude;
            input2.value = longitude;
        }        
    }
</script>
@endsection