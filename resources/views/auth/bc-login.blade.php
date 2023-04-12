@extends('layout.layout')

@section('container')
<div class="min-h-screen bg-gray-200 font-openSans">
    <div class="flex justify-center relative items-center justify-items-center pt-6 2xl:pt-20">
        <div class="bg-gradient-to-t from-[#47BF71] to-[#67DA8F] 2xl:w-[600px] 2xl:h-[800px] w-[450px] h-[600px] rounded-tl-xl rounded-bl-xl shadow-lg">
            <img class="mt-12 2xl:mt-24 scale-75" src="/img/login.svg" alt="">
            <div class="text-center text-white">
                <h1 class="2xl:text-2xl md:text-xl font-bold capitalize">Your one stop repair solution</h1>
                <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br> Placeat, eveniet!</p>
            </div>
        </div>

        <div class="bg-white 2xl:w-[1000px] 2xl:h-[800px] xl:w-[600px] xl:h-[600px] rounded-tr-xl rounded-br-xl shadow-lg">
            <div class="xl:pt-10 2xl:pt-32">
                <div class="flex justify-center">
                    <div class="bg-gray-100 w-24 h-24 rounded-full hover:bg-gray-300">
                       <a href="/"><img class="m-auto pt-4 scale-90 2xl:pt-5 " src="/img/user_check.svg" alt=""></a>
                    </div>
                </div>
                <div class="text-center pt-6">
                    <h1 class="text-2xl font-bold 2xl:text-3xl">Welcome Back!</h1>
                    <p class="text-sm 2xl:text-base font-light pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut egestas <br> nulla magna, in interdum purus tempus at.</p>
                </div>

                <div class="text-center pt-5">
                    <form action="">
                        <input class="border border-gray-200 w-[500px] h-10 rounded-md pl-4 mb-5 focus:outline-none focus:border-green-500 focus:ring-green-500 focus:ring-1" type="text" placeholder="Email">
                        <input class="border border-gray-200 w-[500px] h-10 rounded-md pl-4 mb-5 focus:outline-none focus:border-green-500 focus:ring-green-500 focus:ring-1" type="password" placeholder="Password">
                        <br>
                        <button class="bg-green-10 w-[500px] h-[40px] rounded-md text-white font-semibold hover:bg-green-700" type="submit">Login</button>
                    </form>
                    <p class="pt-4">Don't have an account yet? <a href="/register" class="text-green-10 hover:text-green-700">Register</a></p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection