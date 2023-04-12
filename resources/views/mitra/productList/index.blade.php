@extends('mitra.layout.template')
@section('content')
<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    @include('mitra.layout.navbar')
    <!-- End Navbar -->
    <style>
       trix-toolbar { display: none; }
    </style>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Product List</h6>
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
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Brand</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($item as $d)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    @if ( $d->image == null)
                                                    <img src="/img/product/placeholder.jpg" alt=""
                                                        class="avatar avatar-sm me-3">
                                                    @else  
                                                    <img src="{{ asset('storage/'. $d->image) }}"
                                                        class="avatar avatar-sm me-3">
                                                    @endif
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $d->name }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">
                                                {{ $d->brand }}</p>
                                        </td>
                                        <td>
                                            <center>
                                            <button type="button" class="btn bg-gradient-success btn-block mb-3"
                                                data-bs-toggle="modal" data-bs-target="#info{{$d->id}}">
                                                Info
                                            </button>

                                            <a type="button" href="/edit-product/{{ $d->id }}"
                                                class="btn bg-gradient-primary btn-block mb-3">
                                                Edit
                                            </a>
                                            <a class="btn bg-gradient-danger btn-block mb-3"
                                                href="{{ url('/delete-product').'/'.$d->id }}">Delete</a>
                                            </center>
                                        </td>
                                        <!-- Modal Info Product-->
                                        <div class="modal fade" id="info{{$d->id}}" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Informasi Produk
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Nama
                                                                    Sparepart:</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{$d->name}}" id="recipient-name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name"
                                                                    class="col-form-label">Brand:</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{$d->brand}}" id="recipient-name" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name"
                                                                    class="col-form-label">Kategori:</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{$d->category->name}}" id="recipient-name"
                                                                    readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Foto
                                                                    Produk:</label>
                                                                <img class="img-thumbnail"
                                                                    src="{{ asset('storage/'. $d->image) }}" alt="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name"
                                                                    class="col-form-label">Harga:</label>
                                                                <input type="text" class="form-control"
                                                                    value="{{$d->price}}" id="recipient-name" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text"
                                                                    class="col-form-label">Deskripsi:</label>
                                                                    <div id="blank-toolbar" hidden></div>
                                                                    <trix-editor toolbar="blank-toolbar">{!! $d->desc !!}</trix-editor>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn bg-gradient-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
</main>
<script>
    const element = document.querySelector("trix-editor");
    element.editor.element.setAttribute('contentEditable', false)
    const actions = {
        decreaseNestingLevel: false,
        increaseNestingLevel: false
    }
    element.editor.element.editorController.toolbarController.updateActions(actions);
</script>
@endsection
