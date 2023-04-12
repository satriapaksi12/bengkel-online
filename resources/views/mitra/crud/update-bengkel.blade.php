<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <title>Store Update</title>
</head>

<body>
   {{-- Notifikasi Update --}}
   @if (session('success_update'))
   <div class="alert alert-success col-lg-8`">
   {{ session('success_update') }}
  </div>
@endif

@foreach($stores as $s)
    <!--Kurang Form Input File-->
    <form action="/store-update" method="POST" enctype="multipart/form-data"> 
        @csrf
        <input type="hidden" name="id" placeholder="Nama Bengkel" value="{{ $s->id}}"> 
        {{-- @error('store_name')
        <div class="invalid-feedback">
            {{ $message }}
        </div> 
        @enderror --}}
        <br>
        <input type="text" name="store_name" placeholder="Nama Bengkel" value="{{ $s->store_name }}" class="form-control @error('store_name') is-invalid @enderror"> 
        @error('store_name')
        <div class="invalid-feedback">
            {{ $message }}
        </div> 
        @enderror
        <br>
        <input type="time" name="open" placeholder="Jam Buka" value="{{ $s->open }}" class="form-control @error('open') is-invalid @enderror">
        @error('open')
        <div class="invalid-feedback">
            {{ $message }}
        </div> 
        @enderror
        <br>
        <input type="time" name="close" placeholder="Jam Tutup"  value="{{ $s->close }}" class="form-control @error('close') is-invalid @enderror">
        @error('close')
        <div class="invalid-feedback">
            {{ $message }}
        </div> 
        @enderror
        <br>
        <input type="number" name="phone_store" placeholder="No Telp Bengkel"  value="{{ $s->phone_store }}" class="form-control @error('phone_store') is-invalid @enderror">
        @error('phone_store')
        <div class="invalid-feedback">
            {{ $message }}
        </div> 
        @enderror
        <br>
        <textarea name="address" cols="30" rows="10" placeholder="Alamat Bengkel"  class="form-control @error('address') is-invalid @enderror">
            {{ $s->address }}
            @error('address')
            <div class="invalid-feedback">
                {{ $message }}
            </div> 
            @enderror
        </textarea>
        <input type="hidden" name="store_image" value="Dummy"><br>
        <button type="submit">Submit</button>
    </form>
    @endforeach
</body>

</html>