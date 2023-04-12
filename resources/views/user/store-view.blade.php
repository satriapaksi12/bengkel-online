<x-app-layout>
    <style>
        /*Overrides for Tailwind CSS */

        /*Form fields*/
        .dataTables_wrapper select,
        .dataTables_wrapper .dataTables_filter input {
            color: #4a5568;
            /*text-gray-700*/
            padding-left: 1rem;
            /*pl-4*/
            padding-right: 1.5rem;
            /*pl-4*/
            padding-top: .5rem;
            /*pl-2*/
            padding-bottom: .5rem;
            /*pl-2*/
            line-height: 1.25;
            /*leading-tight*/
            border-width: 2px;
            /*border-2*/
            border-radius: .25rem;
            border-color: #ebf4ff;
            /*border-gray-200*/
            background-color: #edf2f7;
            /*bg-gray-200*/

        }

        /*Row Hover*/
        table.dataTable.hover tbody tr:hover,
        table.dataTable.display tbody tr:hover {
            background-color: #ebf4ff;
            /*bg-indigo-100*/
        }

        /*Pagination Buttons*/
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            border: 1px solid transparent;
            /*border border-transparent*/

        }

        /*Pagination Buttons - Current selected */
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #a3e635 !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Pagination Buttons - Hover */
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            color: #fff !important;
            /*text-white*/
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
            /*shadow*/
            font-weight: 700;
            /*font-bold*/
            border-radius: .25rem;
            /*rounded*/
            background: #d9f99d !important;
            /*bg-indigo-500*/
            border: 1px solid transparent;
            /*border border-transparent*/
        }

        /*Add padding to bottom border */
        table.dataTable.no-footer {
            border-bottom: 1px solid #e2e8f0;
            /*border-b-1 border-gray-300*/
            margin-top: 0.75em;
            margin-bottom: 0.75em;
        }

        /*Change colour of responsive icon*/
        table.dataTable.dtr-inline.collapsed>tbody>tr>td:first-child:before,
        table.dataTable.dtr-inline.collapsed>tbody>tr>th:first-child:before {
            background-color: #667eea !important;
            /*bg-indigo-500*/
        }
    </style>
    <!-- Navbar -->
    <section id="banner" class="bg-gradient-to-r from-green-100 to-green-400 ">
        <div class="flex px-5 lg:px-36  flex justify-around items-center">
            <p class="font-semibold text-3xl hidden md:block">BengkelAe</p>
            <livewire:search-item />
            <div class="flex justify-center">
                <div>
                    <button class="inline-block px-6 bg-white text-green-700 font-medium text-xs font-bold uppercase rounded shadow-md hover:bg-green-1  00 hover:shadow-lg focus:bg-green-300 focus:shadow-lg  focus:outline-none focus:ring-0 active:bg-green-400 active:shadow-lg transition duration-150 ease-in-out mr-1.5" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Profil Toko</button>

                    <!-- Off canva kanan -->
                    <div class="offcanvas offcanvas-end fixed bottom-0 flex flex-col bg-white invisible bg-clip-padding shadow-sm outline-none transition duration-300 ease-in-out text-gray-700 top-0 right-0 border-none w-3/5 md:1/2 lg:w-1/4" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header flex items-center justify-between p-4">
                            <h5 class="offcanvas-title mb-0 leading-normal font-semibold" id="offcanvasRightLabel">Profil Toko</h5>
                            <button type="button" class="btn-close box-content w-4 h-4 p-2 -my-5 -mr-2 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body flex-grow p-4 overflow-y-auto">
                            <!-- Profil toko dalam off canva -->

                            <div class="flex flex-col shadow-xl">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class=" text-center">
                                            <img src="{{ asset('store_data/'.$data->id.'/image/'.$data->store_image) }}" class="rounded-full w-32 mb-4 mx-auto" alt="Avatar" />
                                            <h5 class="text-3xl font-semibold leading-tight mb-2">{{$data->users->name}}</h5>
                                            <p class="text-gray-500 text-xl"> {{$data->store_name}}</p>
                                        </div>
                                        <hr class="m-5">
                                        <div>
                                            <p class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><span class="text-sm font-semibold px-6 py-4">Telephone :</span>{{$data->phone_store}}</p>
                                            <p class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><span class="text-sm font-semibold px-6 py-4">Address :</span>{{$data->address}}</p>
                                            <p class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><span class="text-sm font-semibold px-6 py-4">Kecamatan :</span>{{$data->kecamatan->name}}</p>
                                            <p class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap"><span class="text-sm font-semibold px-6 py-4">Kota :</span>{{$data->kecamatan->kota->name}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <!-- Tabel Barang -->


    <br>
    <div class="container mx-auto px-16  ">
        <div class="items-center">
            <!-- Map -->
            <div class=" w-full ">
                <div id="map" style="width:%; height:580px;" class="lg:mx-16 mx-4 "></div>
            </div>
            <!-- Map Akhir -->

            <div class=" ml-5 pb-10">
                <p class="uppercase text-3xl font-bold text-center my-5">Barang yang tersedia</p>
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded-xl shadow-xl bg-white ">


                <table id="example" class="stripe hover rounded-b-xl " style="width:100%; padding-top: 1em;  padding-bottom: 1em; ">
                    <thead class="bg-green-100 rounded-xl ">
                        <tr class="rounded-3xl">
                            <th data-priority="1" class="px-6 py-2 text-xs text-gray-500 font-roboto rounded-tl-xl">Nama Item</th>
                            <th data-priority="2" class="px-6 py-2 text-xs text-gray-500 font-roboto ">Brand</th>
                            <th data-priority="3" class="px-6 py-2 text-xs text-gray-500 font-roboto">Harga</th>
                            <th data-priority="4" class="px-6 py-2 text-xs text-gray-500 font-roboto rounded-tr-xl">Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data->item as $i)
                        <tr>
                            <td class="">{{$i->name}}</td>
                            <td>{{$i->brand}}</td>
                            <td> {{$i->price}}</td>
                            <td class="">{{$i->category->name}}</td>
                        </tr>
                        @endforeach


                    </tbody>

                </table>
            </div>
            </div>






        </div>
    </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
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

        <!-- jQuery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!--Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
    $(document).ready(function() {

        var table = $('#example').DataTable({
                responsive: true
            })
            .columns.adjust()
            .responsive.recalc();
    });
</script>
</x-app-layout>

