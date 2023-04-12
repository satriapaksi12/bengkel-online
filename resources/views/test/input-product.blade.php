<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <title>Test Input Product</title>
</head>

<body>
    <!-- You can actually customize padding on a select element: -->
    <form action="{{url('test-input-product')}}" method="POST"> 
        @csrf
        <select class="px-4 py-3 rounded-full" name="item">
            <option selected>Pilih Item</option>
            @foreach($item as $i)
            <option value="{{$i->id}}">{{$i->name}}</option>
            @endforeach
        </select>
        <select class="px-4 py-3 rounded-full" name="store">
            <option selected>Pilih Bengkel</option>
            @foreach($store as $s)
                <option value="{{$s->id}}">{{$s->store_name}}</option>
            @endforeach
        </select>
        <input type="number" name="price" placeholder="Masukkan Harga">
        <button type="submit">Submit</button>
    </form>
</body>

</html>