@extends('user.layout.user-layout')
@section('content')

    <section id="banner" class="bg-gradient-to-r from-green-600 to-ijo">
        <div class="px-10 pt-8">
            <div class="container mx-auto">
                <h1 class="text-4xl  py-10 text-left font-bold text-white uppercase">Compare Part</h1>
                <p class="w-3/4 md:w-1/2 lg:1/4 text-white font-bold pb-20 ">The comparison function is to find out whether
                    there are differences in variables between one group and another. Comparison is an observation that aims
                    to find ut and/or test the differences between two or more groups.</p>
            </div>
        </div>
    </section>

    <section id="card text-center">
        <div class="container mx-auto justify-center">
            <h1 class="py-6 text-6xl text-center font-bold text-green-800">Categories</h1>
            <div class="flex flex-wrap justify-center ">

                @foreach ($categories as $cat)
                    <a href="sparepart/{{ $cat->slug }}" class="w-[400px] h-[400px] p-10 md:w-1/2 lg:w-1/3  xl:w-1/4 ">
                        <div
                            class="border-2 border-ijo bg-slate-50 rounded-3xl px-5 py-14 hover:bg-ijo duration-500 transition ease-in-out shadow-lg group hover:scale-105 ">
                            <div class="flex justify-center"><img src="{{ $cat->icon_url }}" alt="" width="30%">
                            </div>
                            <div class="text-center ">
                                <h1 class="p-3 text-2xl font-bold group-hover:text-white">{{ $cat->name }}</h1>
                                <h4 class="group-hover:text-slate-100">{{ $cat->description }}</h4>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>

        </div>
    </section>

    <section id=" card text-center " class="bg-green-500 pb-20">

        <div class="container mx-auto justify-center">
            <div class="flex flex-wrap justify-center ">

                <div class="w-[240px] h-[240px] p-10 sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 mb-28 px-5">
                    <div class="justify-items-centercenter px-5 py-8 border-2 border-green-200 bg-slate-50 rounded-l hover:bg-ijo duration-300 transition ease-in-out shadow-lg group hover:scale-105">
                        <div class="flex justify-center"><img src="img/product/G1.png" alt="Gambar-product" width="80%">
                        </div>
                        <div class="text-center ">
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white">Brakes</h1>
                            <h4 class="group-hover:text-slate-100">Rp123123123</h4>
                        </div>
                        <div class="flex justify-center items-center bg-ijo group-hover:bg-white duration-500 transition ease-in-out hover:scale-105 mt-5 rounded-full">
                            <a href="" class="block">
                                <h3 class="uppercase font-bold">DETAILS</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-[240px] h-[240px] p-10 sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 mb-28 px-5">
                    <div class="justify-items-centercenter px-5 py-8 border-2 border-green-200 bg-slate-50 rounded-l hover:bg-ijo duration-300 transition ease-in-out shadow-lg group hover:scale-105">
                        <div class="flex justify-center"><img src="img/product/G1.png" alt="Gambar-product" width="80%">
                        </div>
                        <div class="text-center ">
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white">Brakes</h1>
                            <h4 class="group-hover:text-slate-100">Rp123123123</h4>
                        </div>
                        <div class="flex justify-center items-center bg-ijo group-hover:bg-white duration-500 transition ease-in-out hover:scale-105 mt-5 rounded-full">
                            <a href="" class="block">
                                <h3 class="uppercase font-bold">DETAILS</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-[240px] h-[240px] p-10 sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 mb-28 px-5">
                    <div class="justify-items-centercenter px-5 py-8 border-2 border-green-200 bg-slate-50 rounded-l hover:bg-ijo duration-300 transition ease-in-out shadow-lg group hover:scale-105">
                        <div class="flex justify-center"><img src="img/product/G1.png" alt="Gambar-product" width="80%">
                        </div>
                        <div class="text-center ">
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white">Brakes</h1>
                            <h4 class="group-hover:text-slate-100">Rp123123123</h4>
                        </div>
                        <div class="flex justify-center items-center bg-ijo group-hover:bg-white duration-500 transition ease-in-out hover:scale-105 mt-5 rounded-full">
                            <a href="" class="block">
                                <h3 class="uppercase font-bold">DETAILS</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-[240px] h-[240px] p-10 sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 mb-28 px-5">
                    <div class="justify-items-centercenter px-5 py-8 border-2 border-green-200 bg-slate-50 rounded-l hover:bg-ijo duration-300 transition ease-in-out shadow-lg group hover:scale-105">
                        <div class="flex justify-center"><img src="img/product/G1.png" alt="Gambar-product" width="80%">
                        </div>
                        <div class="text-center ">
                            <h1 class="p-3 text-2xl font-bold group-hover:text-white">Brakes</h1>
                            <h4 class="group-hover:text-slate-100">Rp123123123</h4>
                        </div>
                        <div class="flex justify-center items-center bg-ijo group-hover:bg-white duration-500 transition ease-in-out hover:scale-105 mt-5 rounded-full">
                            <a href="" class="block">
                                <h3 class="uppercase font-bold">DETAILS</h3>
                            </a>
                        </div>
                    </div>
                </div>



            </div>
        </div>

                                <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Company</a>

        <div class="container py-20 pb-60 mx-auto">
            <div class="flex flex-wrap xl:flex justify-around">
                <div>
                    <button type="button" class="bg-blue-400 px-10 py-3 border-2 border-blue-300 text-white font-semibold text-lg  uppercase rounded-lg hover:bg-blue-300  transition ease-in-out shadow-lg mb-10 md:mb-0">Bengkel Terdekat</button>
                </div>
                <div>
                    <button type="button" class="px-10 py-3 border-2 bg-red-600 border-red-500 text-white font-semibold text-lg leading-tight uppercase rounded-lg hover:bg-red-500 focus:outline-none focus:ring-0 transition  ease-in-out shadow-lg"> Login / Register Sebagai Mitra</button>
                </div>
            </div>
        </div>

        <div class="container mx-auto">
            <div class="bg-white shadow-lg rounded-xl h-full ">
                <div class="p-10 text-center mx-20">
                    <h1 class="font-allison font-semibold text-8xl py-10">Bengkel AE</h1>
                    <p class="text-xl leading-relaxed">Bengkel AE adalah aplikasi berbasis website grati yang dibuat dengan tujuan membantu pegguna menemukan dan mendapatkan informasi seputar bengkel dan sparepart automotif. Kami bermmitra dengan pemilik bengkel untuk mendapatkan onformasi sparepart yang mereka perjual belikan, dan lokasi bengkel tersebut, untuk selanjutnya dipublikasikan kepada pengguna melalui website ini. Website ini menciptakan kemudahan bagi masyarakat pengguna website ini yang memerlukan informasi posisi bengkel terdekat dan informasi perjualbelian sparepart terdekat, karena kami juga membuat komperasi harga spesifikasi dari tiap-tiap sparepart di tiap-tiap bengkel.</p>
                </div>
            </div>
        </div>

        <div class="container mx-auto py-20">
            <div class="flex flex-wrap justify-center">
                <div class="xl:flex ">
                    <div class="pb-10 group"><img src="img/Team/rozy.jpg" alt="" class="rounded-full scale-75 group-hover:scale-90 transition ease-in-out duration-500 shadow-xl ">
                        <p class="text-white font-semibold text-center text-xl align-text-top group-hover:scale-110 group-hover:underline transition duration-1000 group-hover:animate-pulse">Rozy Nur Fatmala</p>
                    </div>
                    <div class="pb-10 group"> <img src="img/Team/natan.jpg" alt="" class="rounded-full scale-75 group-hover:scale-90 transition ease-in-out duration-700 shadow-xl ">
                        <p class="text-white font-semibold text-center text-xl group-hover:scale-110 group-hover:underline transition duration-1000 group-hover:animate-pulse">Nathan Ari Soetopo</p>
                    </div>
                </div>
                <div class="xl:flex">
                    <div class="pb-5 group"><img src="img/Team/shalom.jpg" alt="" class="rounded-full scale-75 group-hover:scale-90 transition ease-in-out duration-500 shadow-xl">
                        <p class="text-white font-semibold text-center text-xl group-hover:scale-110 group-hover:underline transition duration-1000 group-hover:animate-pulse">Shallomita Rembulan</p>
                    </div>
                    <div class="pb-5 group"><img src="img/Team/paksi.jpg" alt="" class="rounded-full scale-75 group-hover:scale-90 transition ease-in-out duration-500 shadow-xl">
                        <p class="text-white font-semibold text-center text-xl group-hover:scale-110 group-hover:underline transition duration-1000 group-hover:animate-pulse">Satria Buana Paksi</p>
                    </div>
                </div>
                <div class=" md:block xl:flex">
                    <div class="pb-5 group"><img src="img/Team/syita.jpg" alt="" class="rounded-full scale-75 group-hover:scale-90 transition ease-in-out duration-500 shadow-xl">
                        <p class="text-white font-semibold text-center text-xl group-hover:scale-110 group-hover:underline transition duration-1000 group-hover:animate-pulse">Syi'ta Al-Mar'atush S</p>
                    </div>
                    <div class="pb-5 group"><img src="img/Team/reza.jpg" alt="" class="rounded-full scale-75 group-hover:scale-90 transition ease-in-out duration-500 shadow-xl">
                        <p class="text-white font-semibold text-center text-xl group-hover:scale-110 group-hover:underline transition duration-1000 group-hover:animate-pulse">Reza Richard M S</p>
                    </div>
                </div>
                <div class="xl:flex ">
                    <div class="pb-5 group"><img src="img/Team/rifqi.jpg" alt="" class="rounded-full scale-75 group-hover:scale-90 transition ease-in-out duration-500 shadow-xl">
                        <p class="text-white font-semibold text-center text-xl group-hover:scale-110 group-hover:underline transition duration-1000 group-hover:animate-pulse">Rifqi Oktario</p>
                    </div>
                    <div class="pb-5 group"><img src="img/Team/nizam.jpg" alt="" class="rounded-full scale-75 group-hover:scale-90 transition ease-in-out duration-500 shadow-xl">
                        <p class="text-white font-semibold text-center text-xl group-hover:scale-110 group-hover:underline transition duration-1000 group-hover:animate-pulse">Nizamuddin Aulia</p>
                    </div>
                </div>
                <div class=" md:block lg:flex flex ">
                    <div class="pb-5 group"><img src="img/Team/samuel.jpg" alt="" class="rounded-full scale-75 group-hover:scale-90 transition ease-in-out duration-500 shadow-xl">
                        <p class="text-white font-semibold text-center text-xl group-hover:scale-110 group-hover:underline transition duration-1000 group-hover:animate-pulse">Samuel Steven P H</p>
                    </div>
                    <div class="pb-5 group"><img src="img/Team/sabila.jpg" alt="" class="rounded-full scale-75 group-hover:scale-90 transition ease-in-out duration-500 shadow-xl">
                        <p class="text-white font-semibold text-center text-xl group-hover:scale-110 group-hover:underline transition duration-1000 group-hover:animate-pulse">Sabila Hayati N R</p>
                    </div>
                </div>
                <div class="xl:flex ">
                    <div class="pb-5 group"><img src="img/Team/regita.jpg" alt="" class="rounded-full scale-75 group-hover:scale-90 transition ease-in-out duration-500 shadow-xl">
                        <p class="text-white font-semibold text-center text-xl group-hover:scale-110 group-hover:underline transition duration-1000 group-hover:animate-pulse">Regita Cahya Wulan</p>
                    </div>

                </div>
            </div>
        </div>



    </section>

    <footer class="bg-black pt-12 pb-12">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-32 mb-12 lg:w-1/2">
                    <div class="flex p-5 align-middle inline-block  ">
                        <img src="img/footer/Instagram.png" alt="" class="" style="width:10% ;">
                        <p class="text-white pl-5 my-auto ">@Bengkel_AE</p>
                    </div>
                    <div class="flex p-5 align-middle inline-block">
                        <img src="img/footer/gmail.png" alt="" class="" style="width:10% ;">
                        <p class="text-white pl-5 my-auto">Bengkel_AE@gmail.com</p>
                    </div>
                    <div class="flex p-5 align-middle inline-block">
                        <img src="img/footer/Phone.png" alt="" class="" style="width:10% ;">
                        <p class="text-white pl-5 my-auto">+62 8888 8888</p>
                    </div>
                </div>
                <div class="w-full my-auto px-32 border-l-4 lg:w-1/2">
                    <p class="text-white ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim ratione nisi culpa obcaecati nulla tenetur similique voluptates. Aliquid accusamus, reprehenderit asperiores, dolore dolor voluptas sint eum ipsam, ad et quis.</p>
                </div>
            </div>
        </div>
    </footer>


@endsection
