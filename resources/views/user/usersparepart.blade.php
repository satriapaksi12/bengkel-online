<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- logo -->
       <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/BAE.png') }}" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Categories</title>
</head>

<body class="relative">

    <div class="absolute inset-x-0 top-0 -z-10" style="padding-top: 12rem ;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#4BC274" fill-opacity="1" d="M0,96L48,101.3C96,107,192,117,288,106.7C384,96,480,64,576,48C672,32,768,32,864,42.7C960,53,1056,75,1152,112C1248,149,1344,203,1392,229.3L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
        </svg>
    </div>

    <Section id="banner" class="bg-ijo relative pb-10 lg:pb-0">
        <div class="w-1/5 self-center absolute ">
            <div class="w-[55px] h-[55px] border-2 shadow-sm rounded-lg bg-green-100  p-2 m-5 hover:bg-green-500 transition ease-in-out duration-700 active:bg-green-900"><a href="../"><img src="{{ asset('img/arrow.png') }}" alt="" width="" class="object-cover"></a></div>
        </div>
        <div class="px-24 pt-3">
            <div class="container mx-auto ">
                <div class="">
                    <h1 class="text-4xl  py-10 text-left font-bold text-white uppercase">Compare Part</h1>
                    <p class="w-3/4 md:w-1/2 lg:1/4 text-white font-bold  ">The comparison function is to find out whether there are differences in variables between one group and another. Comparison is an observation that aims to find ut and/or test the differences between two or more groups.</p>
                </div>
            </div>
        </div>
    </Section>

    <section id="card text-center">
        <div class="container mx-auto justify-center">
            <h1 class="py-6 pt-10 text-6xl text-center font-bold text-green-800">Categories</h1>
            <div class="flex flex-wrap justify-center ">
                @foreach($categories as $c)
                <div class="w-[400px] h-[400px] p-10 md:w-1/2 lg:w-1/3  xl:w-1/4 ">
                    <a href="/sparepart/{{ strtolower($c->name) }}">
                        <div class="border-2 border-ijo bg-slate-100 rounded-3xl px-5 py-14 hover:bg-ijo duration-500 transition ease-in-out shadow-lg group hover:scale-105 ">
                            <div class="flex justify-center">
                            </div>
                            <div class="text-center ">
                                <img src="/{{ $c->icon_url }}" class="m-auto w-1/2" alt="">
                                <h1 class="p-3 text-2xl font-bold group-hover:text-white"> {{ $c->name }}</h1>
                                <h4 class="group-hover:text-slate-100">{{$c->description}}</h4>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>

        </div>
    </section>


</body>

</html>