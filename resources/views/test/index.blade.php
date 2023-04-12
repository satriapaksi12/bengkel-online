<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" href = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
    <script src = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <title>Test Page</title>
</head>

<body>
    @foreach ($items as $item)
        {{ $item->name }}<br>
        {{ $item->category->name }}<br>
    @endforeach

    <div id = "map" style = "width:900px; height:580px;"></div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
<script>
    //Option
    const User = L.divIcon({
        html: '<i class="fa fa-crosshairs fa-3x"></i>',
        iconSize: [20, 20],
        className: 'myDivIcon'
    });

    const fontAwesomeIcon = L.divIcon({
        html: '<i class="fa fa-map-marker-alt fa-3x"></i>',
        iconSize: [20, 20],
        className: 'myDivIcon'
    });
</script>
<script>
    var loadMap = function (id) {
        var data= {!! json_encode($location) !!}
        var map = L.map(id, { zoomControl: false });
        var tile_url = 'http://{s}.tile.osm.org/{z}/{x}/{y}.png';
        var layer = L.tileLayer(tile_url, {
            attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
            maxZoom: 18,
        });
        map.addLayer(layer);

        map.locate({setView: true, watch: true}) /* This will return map so you can do chaining */
            .on('locationfound', function(e){
                L.marker([e.latitude, e.longitude], {
                    icon: User,
                }).addTo(map);
                var circle = L.circle([e.latitude, e.longitude], e.accuracy/20, {
                    weight: 1,
                    color: 'blue',
                    fillColor: '#cacaca',
                    fillOpacity: 0.2
                });
                map.addLayer(circle);
                //coba
                var marker = [];
                var i;
                for (var i = 0; i < data.length; i++){
                    marker[i] = new L.marker([data[i][1],data[i][2]], {
                        win_url: data[i][3],
                        icon:  fontAwesomeIcon,
                    }).bindPopup("Bengkel "+data[i][0]);
                    marker[i].addTo(map);
                    marker[i].on('click', onClick);
                }
                function onClick(e) {
                    window.location.href = '{{ url('store-view') }}/' + this.options.win_url + '/show';
                }
            })
        .on('locationerror', function(e){
                console.log(e);
                alert("Location access denied.");
        });
    };
    loadMap('map');
</script>
</html>
