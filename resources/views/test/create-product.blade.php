<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <title>Test Create Product</title>
</head>

<body>
    <!-- You can actually customize padding on a select element: -->
    <form action="{{url('test-create-product')}}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">
        <label for="brand">Brand</label>
        <input type="text" name="brand">
        <label for="price">Price</label>
        <input type="number" name="price">
        <select class="px-4 py-3 rounded-full" name="category">
            <option selected>Pilih category</option>
            @foreach($categories as $c)
                <option value="{{$c->id}}">{{$c->name}}</option>
            @endforeach
        </select>
        <button type="submit">Submit</button>
    </form>
</body>
 <script>
    navigator.geolocation.getCurrentPosition(getLatLon);
        function getLatLon(position) {
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
        console.log("Latitude is "+latitude);
        console.log("Longitude is "+longitude);
    }
 </script>
</html>
