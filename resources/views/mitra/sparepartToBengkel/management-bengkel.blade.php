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
                            <div class="alert alert-success text-center mx-auto alert-dismissible fade show" role="alert">
                                {{ session('success_update') }}
                                <strong>Success!</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="position-relative">
                            <h5>{{$data->store_name}}</h5>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li class="text-white">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center">
                                <tbody>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama Item</th>
                                        <th>Brand</th>
                                        <th>Harga</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($data->item as $d)
                                    <tr class="text-center">
                                        <td class="pt-3">{{ $loop->iteration }}</td>
                                        <td class="pt-3">{{ $d->name }}</td>
                                        <td class="pt-3">{{ $d->brand }}</td>
                                        <td class="pt-3">{{ $d->pivot->price }}</td>
                                        <td>
                                            <button type="button" class="btn bg-gradient-warning" data-bs-toggle="modal"
                                                data-bs-target="#edit{{ $d->id }}">Edit</button>
                                            <button type="button" class="btn bg-gradient-danger" data-bs-toggle="modal"
                                                data-bs-target="#delete{{ $d->id }}">Delete</button>
                                        </td>
                                    </tr>
                                    {{-- Modal Edit --}}
                                    <div class="modal fade" id="edit{{$d->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                          <div class="modal-content">
                                            <div class="modal-body p-0">
                                              <div class="card card-plain">
                                                <div class="card-header pb-0 text-left">
                                                  <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                                                </div>
                                                <div class="card-body">
                                                  <form role="form text-left" method="POST" action="{{url('item-management/'.$d->id.'/'.$data->id.'')}}">
                                                    @csrf
                                                    <label>Nama Product</label>
                                                    <div class="input-group mb-3">
                                                      <input type="text" class="form-control" name="item" value="{{$d->name}}" readonly>
                                                    </div>
                                                    <label>Harga</label>
                                                    <div class="input-group mb-3">
                                                      <input type="number" class="form-control" name="price" placeholder="Edit Harga" value="{{$d->pivot->price}}" required>
                                                    </div>
                                                    <div class="text-left">
                                                      <button type="submit" class="btn bg-gradient-warning mt-4 mb-0">Update</button>
                                                    </div>
                                                  </form>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                    {{-- Modal Detach --}}
                                    <div class="modal fade" id="delete{{$d->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
                                        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h6 class="modal-title" id="modal-title-notification">Konfirmasi Hapus Product</h6>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                              <div class="py-3 text-center">
                                                <i class="ni ni-bell-55 ni-3x"></i>
                                                <h4 class="text-gradient text-danger mt-4">Product {{$d->name}} Akan Dihapus</h4>
                                              </div>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{url('item-management-detach/'.$d->id.'/'.$data->id.'')}}" method="POST">
                                                @csrf
                                                    <button type="submit" class="btn btn-danger">Yakin</button>
                                                </form>
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
