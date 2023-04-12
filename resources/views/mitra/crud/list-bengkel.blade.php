@extends('mitra.layout.template')
@section('content')
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        @include('mitra.layout.navbar')
        <!-- End Navbar -->
        {{-- Test Merge --}}
        <div class="container-fluid py-4">
            <div class="row mt-4">
                <div class="col-lg-12 mb-lg-0 mb-4">
                    <div class="card">
                        <div class="card-header pb-0 p-3">
                            {{-- Notifikasi Update --}}
                            @if (session('success_update'))
                                <div class="alert alert-success text-center mx-auto alert-dismissible fade show"
                                    role="alert">
                                    {{ session('success_update') }}
                                    <strong>Success!</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        <div class="position-relative">
                            @if(Request::is('list-store'))
                            <h4 class="mb-0">List Bengkel</h4>
                            @elseif(Request::is('list-pengajuan-store'))
                            <h4 class="mb-0">List Pengajuan Bengkel</h4>
                            @elseif(Request::is('reject-bengkel'))
                            <h4 class="mb-0">List Reject Bengkel</h4>
                            @elseif(Request::is('banding-bengkel'))
                            <h4 class="mb-0">List Banding Bengkel</h4>
                            @endif
                            <div class="position-absolute top-0 top-0 end-0">
                             @if(Request::is('list-store'))
                            <a href="/store-register" class="btn btn-danger">Tambah</a>
                            @endif
                            </div>
                            <br>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center">
                                <tbody>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama Bengkel</th>
                                        <th>Alamat Bengkel</th>
                                        <th>No. Telpon</th>
                                        <th>Kecamatan</th>
                                        <th>Kota</th>
                                        <th>Foto</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($stores as $s)
                                        <tr class="text-center">
                                            <td class="pt-3">{{ $loop->iteration }}</td>
                                            <td class="pt-3">{{ $s->store_name }}</td>
                                            <td class="pt-3">{{ $s->address }}</td>
                                            <td class="pt-3">{{ $s->phone_store }}</td>
                                            <td class="pt-3">{{ $s->kecamatan->name }}</td>
                                            <td class="pt-3">{{ $s->kecamatan->kota->name }}</td>
                                            <td class="pt-3"><img src='{{asset('store_data/'.$s->id.'/image/'.$s->store_image)}}' alt="no logo" style="max-width: 70px;"></td>
                                            <td>
                                                @if ($s->status_activation == 1)
                                                    <button type="button" class="btn bg-gradient-warning"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#edit-bengkel{{ $s->id }}">Edit</button>
                                                @elseif($s->status_activation == 2)
                                                    <button type="button" class="btn bg-gradient-warning"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#edit-bengkel{{ $s->id }}">Banding</button>
                                                @endif
                                                <button type="button" class="btn bg-gradient-success"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#detail-bengkel{{ $s->id }}">Detail</button>
                                                <a href="{{ url('delete-bengkel/' . $s->id . '') }}"><button
                                                        class="btn bg-gradient-danger"
                                                        onclick="return confirm('Apakah Yakin Ingin Menghapus?')">Delete</button></a>
                                            </td>
                                        </tr>


                                        <!-- Edit List Bengkel -->
                                        <div class="modal fade" id="edit-bengkel{{ $s->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body p-0">
                                                        <div class="card card-plain">
                                                            <div class="card-header pb-0 text-left">
                                                                <h3 class="font-weight-bolder text-info text-gradient">Edit
                                                                    Data Bengkel</h3>
                                                            </div>
                                                            <div class="card-body">
                                                                @if ($s->status_activation == 1)
                                                                    <form role="form text-left" action="/store-update/{{$s->id}}"
                                                                    method="post" enctype="multipart/form-data">
                                                                @elseif($s->status_activation == 2)
                                                                    <form role="form text-left"
                                                                    action="/store-banding" method="post"
                                                                    enctype="multipart/form-data">
                                                                @endif
                                                                @csrf
                                                                <input type="hidden" name="id" class="form-control"
                                                                    placeholder="Id Bengkel" value="{{ $s->id }}">
                                                                <label>Nama Bengkel</label>
                                                                <div class="input-group mb-3">
                                                                    <input type="text" name="store_name"
                                                                        class="form-control @error('store_name') is-invalid @enderror"
                                                                        placeholder="Nama Bengkel"
                                                                        value="{{ $s->store_name }}"
                                                                        class="form-control @error('store_name') is-invalid @enderror">
                                                                    @error('store_name')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                <label>Jam Buka</label>
                                                                <div class="input-group mb-3">
                                                                    <input type="time" name="open"
                                                                        class="form-control  @error('open') is-invalid @enderror"
                                                                        placeholder="Jam Buka" value="{{ $s->open }}"
                                                                        class="form-control @error('open') is-invalid @enderror">
                                                                    @error('open')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                <label>Jam Tutup</label>
                                                                <div class="input-group mb-3">
                                                                    <input type="time" name="close"
                                                                        class="form-control  @error('close') is-invalid @enderror"
                                                                        placeholder="Jam Tutup" value="{{ $s->close }}"
                                                                        class="form-control @error('close') is-invalid @enderror">
                                                                    @error('close')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                                <label>Nomer Telp Bengkel</label>
                                                                <div class="input-group mb-3">
                                                                    <input type="number" name="phone_store"
                                                                        class="form-control  @error('number') is-invalid @enderror"
                                                                        placeholder="No Telp Bengkel"
                                                                        value="{{ $s->phone_store }}"
                                                                        class="form-control @error('phone_store') is-invalid @enderror">
                                                                    @error('phone_store')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                                <label>Gambar Bengkel</label>
                                                                <input class="form-control" type="file" name="store_image">

                                                                <label>Alamat Bengkel</label>
                                                                <textarea name="address"
                                                                    class="form-control">
                                                                    {{$s->address}}
                                                                </textarea>

                                                                <button type="submit"
                                                                    class="btn btn-round bg-gradient-success btn-lg w-100 mt-4 mb-0">Update
                                                                    Data
                                                                </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal Detail -->
                                        <div class="modal fade" id="detail-bengkel{{ $s->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Detail List Bengkel
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Nama
                                                                    Bengkel:</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $s->store_name }}" id="recipient-name"
                                                                    readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" class="col-form-label">Jam
                                                                    Buka</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $s->open }}" id="recipient-name"
                                                                    readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" class="col-form-label">Jam
                                                                    Tutup</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $s->close }}" id="recipient-name"
                                                                    readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" class="col-form-label">Alamat
                                                                    Bengkel</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $s->address }}" id="recipient-name"
                                                                    readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" class="col-form-label">No.
                                                                    Telpon</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $s->phone_store }}" id="recipient-name"
                                                                    readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" class="col-form-label">Status
                                                                    Aktivasi</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $s->status_activation }}"
                                                                    id="recipient-name" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" class="col-form-label">Gambar
                                                                    Bengkel</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $s->store_image }}" id="recipient-name"
                                                                    readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text"
                                                                    class="col-form-label">Latitude</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $s->lat }}" id="recipient-name"
                                                                    readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text"
                                                                    class="col-form-label">Longtiude</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $s->long }}" id="recipient-name"
                                                                    readonly>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn bg-gradient-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Modal Detail -->
                                <div class="modal fade" id="detail-bengkel{{$s->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Detail List Bengkel</h5>
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
                                                <label for="message-text" class="col-form-label">Jam Buka</label>
                                                <input type="text" class="form-control" value="{{$s->open}}" id="recipient-name" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">Jam Tutup</label>
                                                <input type="text" class="form-control" value="{{$s->close}}" id="recipient-name" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">Alamat Bengkel</label>
                                                <input type="text" class="form-control" value="{{$s->address}}" id="recipient-name" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">No. Telpon</label>
                                                <input type="text" class="form-control" value="{{$s->phone_store}}" id="recipient-name" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">Status Aktivasi</label>
                                                <input type="text" class="form-control" value="{{$s->status_activation}}" id="recipient-name" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">Gambar Bengkel</label>
                                                <input type="text" class="form-control" value="{{$s->store_image}}" id="recipient-name" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">Latitude</label>
                                                <input type="text" class="form-control" value="{{$s->lat}}" id="recipient-name" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">Longtiude</label>
                                                <input type="text" class="form-control" value="{{$s->long}}" id="recipient-name" readonly>
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>




    </main>
@endsection