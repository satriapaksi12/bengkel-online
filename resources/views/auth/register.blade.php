<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="/TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
       <!-- logo -->
       <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/BAE.png') }}" />
    <title>Register</title>
</head>

<body>
    <section class="justify-center">
        <div class="flex h-screen lg:my-auto">
            <div class="hidden w-1/3 bg-gradient-to-tl from-green-500 to-green-200 shadow-2xl lg:flex">
                <div class="m-auto px-10">
                    <img src="/img/account/regis.svg" alt="ini-gambar-regis" class="lg:m-auto w-full p-10" width="80%">

                    <p class="text-center font-bold text-gray-100 text-2xl py-5 pt-10">Find The Right Parts For Your Need</p>

                    <p class="text-center font-light text-white ">With BengkelAE you don’t need to worry about replacing your vehicle spare parts!</p>
                </div>
            </div>
            <div class="container justify-center p-20 mx-auto lg:w-2/3 lg:mr-10 lg:my-auto lg:px-40 lg:py-16 ">
                <!-- <img src="{{ asset('img/product/G1.png') }}" alt="Gambar-product" width="100%" class="rounded-xl items-center mx-auto "> -->
                <img src="/img/account/regis.png" alt="Gambar-login1" width="10%" class="rounded-xl  mx-auto ">

                <h1 class="text-center text-3xl font-bold lg:pt-4 text-gray-600">Create Your Free Account !</h1>
                <p class="text-center text-sm font-light py-1 pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis nobis dolorum error voluptatum neque commodi beatae alias eaque ratione sed.</p>
                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <x-jet-validation-errors class="mb-4" />
                <label class="relative block py-2 w-full">
                    <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 px-3 shadow-sm focus:outline-none focus:border-green-500 focus:ring-green-300 focus:ring sm:text-sm" placeholder="Name ..." type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </label>
                <label class="relative block py-2 w-full">
                    <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 px-3 shadow-sm focus:outline-none focus:border-green-500 focus:ring-green-300 focus:ring sm:text-sm" placeholder="Email ..." type="text" name="email" :value="old('email')" required/>
                </label>
                <label class="relative block py-2 w-full">
                    <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 px-3 shadow-sm focus:outline-none focus:border-green-500 focus:ring-green-300 focus:ring sm:text-sm" placeholder="Nomor Induk Kependudukan (NIK)" type="number" name="nik" minlength="16" :value="old('nik')" required />
                </label>
                <label class="relative block py-2 w-full">
                    <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 px-3 shadow-sm focus:outline-none focus:border-green-500 focus:ring-green-300 focus:ring sm:text-sm" placeholder="Nomor Pokok Wajib Pajak (NPWP)" type="number" minlength="16" name="npwp" :value="old('npwp')"/>
                </label>
                <div class="flex justify-center py-3">
                    <div class=" w-full flex">
                        <label for="formFileSm" class="form-label inline-block text-gray-700 w-[120px] align-middle font-bold self-center">Foto KTP :</label>
                        <input class="w-full form-control block px-2 py-1 text-sm font-normal text-slate-400 italic bg-white bg-clip-padding border border-solid border-slate-300 rounded transition ease-in-out m-0 focus:text-green-700 focus:bg-white focus:border-green-400 focus:outline-none" id="formFileSm" type="file" name="photo" :value="old('ktp')" required>
                    </div>
                </div>
                <label class="relative block py-2">
                    <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 px-3 shadow-sm focus:outline-none focus:border-green-500 focus:ring-green-300 focus:ring sm:text-sm" placeholder="Password ..." type="password" name="password" required autocomplete="new-password" />
                </label>
                <label class="relative block py-2">
                    <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 px-3 shadow-sm focus:outline-none focus:border-green-500 focus:ring-green-300 focus:ring sm:text-sm" placeholder="Konfirmasi Password ..." type="password" name="password_confirmation" required autocomplete="new-password" />
                </label>
                <div class="flex justify-between py-4 ">
                    <div class="form-check">
                        <input class="form-check-input appearance- h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-green-800 checked:border-green-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer " type="checkbox" name="terms" id="terms">
                        <label class="form-check-label inline-block text-gray-800" for="flexCheckDefault">
                            I agree to the terms and

                            <button type="button" class="inline-block  text-green-400  focus:text-green-700  focus:outline-none active:text-green-600 rounded-xl duration-150 ease-in-out hover:text-green-200" data-bs-toggle="modal" data-bs-target="#exampleModalLg">Condition</button>

                        </label>
                    </div>
                </div>
                <div class="py-3">
                    <button type="submit" class="w-full bg-[#47BF71] hover:bg-green-600 active:bg-green-700 focus:outline-none focus:ring focus:ring-green-300 justify-center rounded-xl py-2 mt-6 text-white">
                        Register
                    </button>
                </div>
                </form>
                <div class="flex justify-center">
                    <p>Already have an account?</p>
                    <a href="/login" class="text-green-400 hover:text-green-700 active:text-green-800 pl-2">login</a>
                </div>

            </div>

        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModalLg" tabindex="-1" aria-labelledby="exampleModalLgLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
            <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLgLabel">
                        Terms and Condition
                    </h5>
                    <button type="button" class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body relative p-4">
                    1. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, cupiditate. <br>
                    2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus sit fugit eius!
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Modal -->

    <footer class="lg:hidden "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#47bf71" fill-opacity="1" d="M0,160L48,149.3C96,139,192,117,288,112C384,107,480,117,576,133.3C672,149,768,171,864,170.7C960,171,1056,149,1152,128C1248,107,1344,85,1392,74.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg></footer>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>

</html>