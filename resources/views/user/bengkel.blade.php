<x-app-layout>

    <section id="banner" class="bg-gradient-to-r from-green-100 to-green-400">
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

    <section id=" card text-center">
        <div class="container mx-auto justify-center">
            <div class="flex flex-wrap justify-center ">

            <!-- card -->
                <div class="w-[240px] h-[350px] p-10 sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 mb-28 px-5  ">
                    <div class="justify-items-centercenter px-5 py-8 border-2 bg-slate-50 rounded-2xl hover:bg-ijo duration-300 transition ease-in-out shadow-2xl group hover:scale-105">
                        <div class="flex justify-center "><img src="img/product/G1.png" alt="Gambar-product" class="rounded-xl" width="100%">
                        </div>
                        <div class="text-left ">
                            <h1 class="p-2 text-2xl font-bold group-hover:text-white">Ini nama Barang</h1>
                            <h4 class="group-hover:text-slate-100 p-2">Bengkel ABC</h4>
                            <div class="flex align-middle inline-block p-2">
                                <i class="fa-solid fa-location-dot" class="scale-110 pr-2"></i>
                                <p class="pl-2">Bengkel kita bersama</p>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- close card -->

            </div>
        </div>

</x-app-layout>