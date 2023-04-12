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
        <form action="{{ url('create-product') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Add Product</p>
                                <!-- <button type="submit" class="btn btn-primary btn-sm ms-auto">Save</button> -->
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name"
                                            class="form-control-label  @error('name') is-invalid @enderror">Name</label>
                                        <input class="form-control" name="name" type="text" value="{{ old('name') }}">
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="brand"
                                            class="form-control-label @error('brand') is-invalid @enderror">Brand</label>
                                            <select class="form-control" name="brand">
                                                <option value="TDR">TDR</option>
                                                <option value="Honda">Honda</option>
                                                <option value="Cyclo">Cyclo</option>
                                                <option value="Yamaha">Yamaha</option>
                                                <option value="Aspira">Aspira</option>
                                                <option value="Shell">Shell</option>
                                                <option value="Yamalube">Yamalube</option>
                                            </select>
                                        {{-- <input class="form-control" name="brand" type="text" value="{{ old('brand') }}"> --}}
                                        @error('brand')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div> --}}

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="brand"
                                            class="form-control-label @error('brand') is-invalid @enderror">Brand</label>
                                            <select class="form-control" name="brand">
                                                <option value="TDR">TDR</option>
                                                <option value="Honda">Honda</option>
                                                <option value="Cyclo">Cyclo</option>
                                                <option value="Yamaha">Yamaha</option>
                                                <option value="Aspira">Aspira</option>
                                                <option value="Shell">Shell</option>
                                                <option value="Yamalube">Yamalube</option>
                                            </select>
                                        {{-- <input class="form-control" name="brand" type="text" value="{{ old('brand') }}"> --}}
                                        @error('brand')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-control" name="category" id="category">
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }},{{ $category->name }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pilih Bengkel</label>
                                        <select class="form-control" name="bengkel" id="category">
                                            @foreach ($bengkel as $b)
                                            <option value="{{ $b->id }}">{{ $b->store_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>



                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input class="form-control" id="slug" name="slug" type="text" readonly>
                                    </div>
                                </div> --}}

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="price"
                                            class="form-control-label @error('price') is-invalid @enderror">Price</label>
                                        <input class="form-control" id="price" name="price" type="text"
                                            value="{{ old('price') }}">
                                        @error('price')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Foto Produk</label>
                                    <img class="img-preview img-fluid" id="img-preview">
                                    <input class="form-control" onchange="previewImage()" type="file" id="formFile"
                                        name="product_image">
                                </div>
                                <hr>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Deskripsi Produk</label>
                                        <input id="body" type="hidden" name="desc">
                                        <trix-editor input="body"></trix-editor>
                                        {{-- <textarea class="form-control" name="desc" id="" cols="20" rows="5"></textarea> --}}
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Spesifikasi Produk</label>
                                        <input id="spec" type="hidden" name="spec">
                                        <trix-editor input="spec"></trix-editor>
                                        {{-- <textarea class="form-control" name="spec" id="" cols="20" rows="5"></textarea> --}}
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
<script>
    function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('#img-preview');

            imgPreview.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
</script>
@endsection
