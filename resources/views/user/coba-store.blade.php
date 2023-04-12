<x-app-layout>
<!-- Navbar -->
<section id="banner" class="bg-gradient-to-r from-green-100 to-green-400 ">
    <div class="px-5 lg:px-36 py-10 flex justify-center items-center">
            <p class="font-semibold text-3xl hidden md:block">BengkelAe</p>
            <div class="flex border-2 shadow-sm rounded-2xl bg-slate-100 w-1/2 h-[50px] shadow-xl mx-10">
                <div class="rounded-lg w-full ">
                    <form action="">
                        <input type="text" placeholder="Cari sparepart..." class="py-3 border-none rounded-l-2xl w-full bg-slate-100 ring-none focus:ring-0  ">
                    </form>
                </div>
                <div class="content-center py-3 rounded-l-2xl px-2 "><i class="fa-solid fa-magnifying-glass"></i></div>
            </div>
            <div class="flex justify-center">
                <div>
                    <div class="dropdown relative"><a class=" dropdown-toggle px-6 py-3.5 bg-white font-semibold text-md leading-tight  rounded-xl shadow-md hover:bg-slate-200 shadow-lg focus:bg-slate-200 focus:outline-none focus:ring-0 active:bg-slate-400 active:shadow-lg transition duration-150 ease-in-out flex items-center whitespace-nowrap " href="#" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-bars mr-2"></i> Filter </a>
                        <ul class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none " aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 " href="#">Termurah</a>
                            </li>
                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 " href="#">Terdekat</a>
                            </li>
                            <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 " href="#">Terghosting</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

    </div>
</section>


<div class="py-8 px-8 w-2/5 sm:w-4/5 mx-auto bg-white rounded-xl shadow-lg space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6 text-center mt-10  lg:hidden">
                <img class="block mx-auto w-20 rounded-full sm:mx-0 sm:shrink-0 bg-slate-200" src="" alt="Logo-Bengkel">
                    <div class="text-center space-y-2 lg:w-1/2 mx-auto w-full">
                        <div class="space-y-0.5">
                        <p class="text-lg text-black font-semibold">
                        {{$data->store_name}}
                        </p>
                        <p class="text-slate-500 font-medium">
                        {{$data->users->name}}
                        </p>
                        </div>
                    </div>
                    <button class="px-4 py-3.5 text-sm text-green-600 font-semibold rounded-full border border-green-200 hover:text-white hover:bg-green-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2">Message</button>
                </div>


<div class="container mx-auto lg:hidden rounded-xl px-2">
    <div class="flex flex-col ">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden rounded-xl">
                <table class="min-w-full text-center">
                <thead class="border-b bg-gray-800">
                    <tr>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                    Nama Item
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                    Brand
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                    Harga
                    </th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                    Category
                    </th>
                    </tr>
                </thead class="border-b">
                <tbody>
                @foreach($data->item as $i)
                    <tr class="bg-white border-b">
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$i->name}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$i->brand}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$i->price}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{$i->category->name}}
                        </td>
                    </tr class="bg-white border-b">
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>

  
<br>
    <div class="container mx-auto" >
        <div class="flex items-center">
            <div class="lg:w-2/5 w-full shadow-xl">
                <div id = "map" style = "width:100%; height:580px;" ></div>
            </div>
            <div class="hidden lg:block w-3/5 ml-5 pb-10">
                <!-- <div class="py-8 px-8 max-w-md mx-auto bg-white rounded-xl shadow-lg space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6">
                 <img class="block mx-auto w-20 rounded-full sm:mx-0 sm:shrink-0 bg-slate-200" src="" alt="Logo-Bengkel">
                    <div class="text-center space-y-2 sm:text-left w-1/2">
                        <div class="space-y-0.5">
                        <p class="text-lg text-black font-semibold">
                        {{$data->store_name}}
                        </p>
                        <p class="text-slate-500 font-medium">
                        {{$data->users->name}}
                        </p>
                        </div>
                    </div>
                    <button class="px-4 py-3.5 text-sm text-green-600 font-semibold rounded-full border border-green-200 hover:text-white hover:bg-green-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2">Message</button>
                </div> -->

                <div class="flex flex-col shadow-xl rounded-xl mt-8">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden rounded-t-xl">
                            <table class="min-w-full text-center">
                            <thead class="border-b bg-gray-800">
                                <tr>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                Nama Item
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                Brand
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                Harga
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                Category
                                </th>
                                </tr>
                            </thead class="border-b">
                            <tbody>
                            @foreach($data->item as $i)
                                <tr class="bg-white border-b">
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{$i->name}}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{$i->brand}}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{$i->price}}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    {{$i->category->name}}
                                    </td>
                                </tr class="bg-white border-b">
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="py-10 px-8 w-full mx-auto bg-white rounded-xl shadow-lg space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6 mt-14 flex flex-wrap justify-between border-2 border-green-50">
                <div class="w-1/6">
                    <img class="block mx-auto w-20 rounded-full sm:mx-0 sm:shrink-0" src="{{url('./product/G1.png')}}" alt="Logo-Bengkel">
                </div>
                <div class="text-center space-y-2 sm:text-left w-1/3">
                        <div class="space-y-0.5">
                        <p class="text-lg text-black font-semibold">
                        {{$data->store_name}}
                        </p>
                        </div>
                </div>
                <div class="text-center">
                <p class="text-lg text-black font-semibold">
                {{$data->users->name}}
                        </p>
                </div>
                <div class="text-center space-y-2 sm:text-left w-1/3 ">
                        <div class="space-y-0.5">
                        <p class="text-slate-500 font-medium">
                        {{$data->address}}
                        </p>
                        <p class="text-slate-500 font-medium">
                        {{$data->phone_store}}
                        </p>
                        </div>
                </div>
                
                </div>
    </div> 
    
    <div class="absolute inset-x-0 bottom-0 -z-10" >
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#bbf7d0" fill-opacity="1" d="M0,32L180,128L360,160L540,320L720,224L900,288L1080,256L1260,128L1440,128L1440,320L1260,320L1080,320L900,320L720,320L540,320L360,320L180,320L0,320Z"></path></svg></div>
  
    
   
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
    <script>
        var data= {!! json_encode($latlong) !!}
        //Baru
        var map_init = L.map('map', {
            center: [data[0], data[1]],
            zoom: 8
        });
        var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map_init);
        L.Control.geocoder().addTo(map_init);
        if (!navigator.geolocation) {
            console.log("Your browser doesn't support geolocation feature!")
        } else {
            navigator.geolocation.getCurrentPosition(mapRoute);
            setInterval(() => {
                navigator.geolocation.getCurrentPosition(getPosition)
            }, 5000);
        };
        var marker, circle, lat, long, accuracy;

        function getPosition(position) {
            lat = position.coords.latitude
            long = position.coords.longitude
            accuracy = position.coords.accuracy

            if (marker) {
                map_init.removeLayer(marker)
            }

            if (circle) {
                map_init.removeLayer(circle)
            }

            marker = L.marker([lat, long])
            circle = L.circle([lat, long], { radius: accuracy })

            var featureGroup = L.featureGroup([marker, circle]).addTo(map_init)

            map_init.fitBounds(featureGroup.getBounds())

            console.log("Your coordinate is: Lat: " + lat + " Long: " + long + " Accuracy: " + accuracy)
        }
        function mapRoute(){
            navigator.geolocation.getCurrentPosition(cekFunction);
            function cekFunction(position){
                L.Routing.control({
                waypoints: [
                    L.latLng(position.coords.latitude, position.coords.longitude),
                    L.latLng(data[0], data[1]),
                ],
                routeWhileDragging: false,
                missingRouteTolerance: 10
                }).addTo(map_init);
            }
        }
    </script>
</x-app-layout>

