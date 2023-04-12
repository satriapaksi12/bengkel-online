<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Details </title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
    <!--Replace with your tailwind.css once created-->


    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Library element -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>


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
            background: #d9f99d  !important;
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



</head>

<body>

    <!-- Navbar -->
    <section id="banner" class="bg-gradient-to-r from-green-200 to-green-600 flex justify-center">
        <div class="w-1/5 self-center">
            <div class="w-[55px] h-[55px] border-2 shadow-sm rounded-lg bg-slate-100  p-2 ml-10"><a href=""><img src="{{ asset('img/arrow.png') }}" alt="" width="" class="object-cover"></a></div>
        </div>
        <div class=" px-10 lg:pr-32 py-4 w-full mx-auto">
            <div class="flex border-2 shadow-sm rounded-lg bg-slate-100 justify-center">
                <div class="content-center py-3 rounded-l-lg px-2 "><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="10" cy="10" r="7"></circle>
                        <line x1="21" y1="21" x2="15" y2="15"></line>
                    </svg></div>
                <div class="rounded-lg w-full ">
                    <form action="">
                        <input type="text" placeholder="Search for a part..." class="py-3 border-none rounded-r-lg w-full bg-slate-100  focus:ring-green-500 ">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero -->
    <section id="Konten" class=" pb-20 bg-slate-50" >
        <div class="container max-w-md p-10 justify-center lg:flex lg:max-w-full  lg:py-5 mx-auto ">
            <div class=" rounded-l-xl px-5 relative max-w-screen-md w-full shadow-green-200 shadow-lg bg-white ">
                <div class="flex justify-center  lg:hidden">
                    <h1 class="uppercase font-bold text-4xl pb-5">{{ $item->name }}</h1>
                </div>
                @if ($item->image == null)
                    <div class="w-auto mx-auto lg:hidden pb-7"><img src="/img/product/placeholder.jpg" alt="Gambar-product" width="100%" class="rounded-xl items-center mx-auto "></div>
                @else
                    <div class="w-auto mx-auto lg:hidden pb-7"><img src="{{ asset('storage/'. $item->image) }}" alt="Gambar-product" width="100%" class="rounded-xl items-center mx-auto "></div>
                @endif
                {{-- <div class="bg-gradient-to-l from-green-100 to-green-400 w-5/6 mx-auto rounded-lg lg:hidden  ">
                    <h5 class="flex justify-center text-sm">Average Price</h5>
                    <h3 class="flex justify-center">{{ $item->price }}</h2>
                </div> --}}
                <div class="p-10 ">
                    <h1 class="text-2xl pb-2 font-semibold">{{ $item->name }}</h1>
                    <p>{!! $item->desc !!} </p>
                </div>
                {{-- <div class="flex justify-end py-3 ">
                    <div class="bg-gradient-to-l from-green-100 to-green-400 rounded-l-lg hidden lg:block justify-end w-1/2  lg:space-y-1 space-y-3 lg:absolute lg:bottom-0 lg:right-0 mb-2 p-2">
                        <h5 class="flex justify-left text-md uppercase font-semibold pl-2">Average Price</h5>
                        <h3 class="flex justify-left pl-5 ">Rp. {{ $item->price }}</h2>
                    </div>
                </div> --}}
            </div>
            <div class="hidden lg:block shadow-green-200 shadow-lg rounded-r-2xl">
                <div class="w-[400px] mx-auto">
                    @if ($item->image == null)
                        <img src="/img/product/placeholder.jpg" alt="Gambar-product" width="100%" class=" items-center mx-auto rounded-r-2xl object-fill ">
                    @else
                        <img src="{{ asset('storage/'. $item->image) }}" alt="Gambar-product" width="100%" class=" items-center mx-auto rounded-r-2xl object-fill ">
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Information -->
    <section id="deskrip" class="bg-gray-200 ">
        <div class="container p-10 lg:mx-20  ">
            <h1 class="py-2 mb-5 uppercase font-bold lg:text-5xl text-3xl font-inconsolata border-b-2 border-gray-500 text-gray-500 w-3/4">Product Information</h1>
            <hr>
            {!! $item->spec !!}
        </div>
    </section>


    <!-- Trigger Modal -->
    <div class="container flex justify-center mx-auto py-24">
        <button type="button" class="inline-block px-6 py-2.5 bg-green-400 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-500 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
            Check Available Store
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModalCenter" tabindex="-1" aria-labelledby="" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none modal-lg">
            <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                        List Available Store
                    </h5>
                    <button type="button" class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body relative p-4 bg-green-50">

                    <!-- modal content -->
                    <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded-xl shadow-xl bg-white ">


                        <table id="example" class="stripe hover rounded-b-xl " style="width:100%; padding-top: 1em;  padding-bottom: 1em; ">
                                        <thead class="bg-green-100 rounded-xl ">
                                            <tr class="rounded-3xl">
                                                <th data-priority="1" class="px-6 py-2 text-xs text-gray-500 font-roboto rounded-tl-xl">No</th>
                                                <th data-priority="2" class="px-6 py-2 text-xs text-gray-500 font-roboto ">Name</th>
                                                <th data-priority="3" class="px-6 py-2 text-xs text-gray-500 font-roboto">Store</th>
                                                <th data-priority="4" class="px-6 py-2 text-xs text-gray-500 font-roboto rounded-tr-xl">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody >
                                        @foreach ($data as $d)
                                            <tr >
                                                <td class="">{{ $loop->iteration }}</td>
                                                <td>{{ $d->name }}</td>
                                                <td><a href="/store-view/{{ $d->id }}/show">{{ $d->store_name }}</a></td>
                                                <td class="">Rp {{ $d->price }}</td>
                                            </tr>
                                            @endforeach


                                        </tbody>

                                    </table>
                    </div>
                </div>
                <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                    <button type="button" class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <footer class="w-full py-3 bg-ijo mx-auto">
        <p class="text-white text-center font-roboto text-sm">© 2022 Copyright: BengkelAe</p>
    </footer>


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

    <!-- library elemnt -->
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

</body>

</html>
