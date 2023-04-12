<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Login</title>
</head>

<body>
    <section class="justify-center">
        <div class="flex h-screen lg:my-auto">
            <div class="hidden lg:block lg:w-1/3 bg-gradient-to-tl from-green-500 to-green-200 lg:flex shadow-2xl z-10">
                <img src="/img/account/login.svg" alt="ini-gambar" class="lg:m-auto p-20">
            </div>
            <div class="container justify-center p-20 mx-auto lg:w-2/3 lg:mr-10 lg:my-auto lg:px-40 lg:py-20">
                <!-- <img src="{{ asset('img/product/G1.png') }}" alt="Gambar-product" width="100%" class="rounded-xl items-center mx-auto "> -->
                <img src="/img/account/login1.png" alt="Gambar-login1" width="10%" class="rounded-xl  mx-auto ">

                <h1 class="text-center text-3xl font-bold lg:py-4 text-gray-600">Hello Again!</h1>
                <label class="relative block py-2 w-full">
                    <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 px-3 shadow-sm focus:outline-none focus:border-green-500 focus:ring-green-300 focus:ring sm:text-sm" placeholder="Email ..." type="text" name="search" />
                </label>
                <label class="relative block py-2">
                    <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 px-3 shadow-sm focus:outline-none focus:border-green-500 focus:ring-green-300 focus:ring sm:text-sm" placeholder="Password ..." type="password" name="search" />
                </label>
                <div class="flex justify-between py-1 pb-3">
                    <div class="form-check">
                        <input class="form-check-input appearance- h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-green-800 checked:border-green-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer " type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label inline-block text-gray-800" for="flexCheckDefault">
                            Remember Me
                        </label>
                    </div>
                    <div class="text-green-400 hover:text-green-700 active:text-green-800 font-semibold"><a href="">Forget Password ?</a></div>
                </div>

                <div class="py-3">
                    <button class="w-full bg-[#47BF71] hover:bg-green-600 active:bg-green-700 focus:outline-none focus:ring focus:ring-green-300 justify-center rounded-xl py-2 mt-6 text-white">
                        <a href="" class="text-center">
                            Log In
                        </a>
                    </button>
                </div>

                <div class="flex justify-center">
                    <p>Don't have an account?</p>
                    <a href="" class="text-green-400 hover:text-green-700 active:text-green-800 pl-2">Create New Account</a>
                </div>

            </div>

        </div>
    </section>

    <footer class="lg:hidden "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#47bf71" fill-opacity="1" d="M0,160L48,149.3C96,139,192,117,288,112C384,107,480,117,576,133.3C672,149,768,171,864,170.7C960,171,1056,149,1152,128C1248,107,1344,85,1392,74.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg></footer>
</body>

</html>