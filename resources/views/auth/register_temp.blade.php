<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="/TW-ELEMENTS-PATH/dist/js/index.min.js"></script>
    <title>Login</title>
</head>

<body>
    <section class="justify-center">
        <div class="flex h-screen lg:my-auto">
            <div class="hidden lg:block w-1/3 bg-gradient-to-tl from-green-500 to-green-200 shadow-2xl lg:flex">
                <div class="m-auto px-10">
                    <img src="/img/account/regis.svg" alt="ini-gambar-regis" class="lg:m-auto w-full p-10" width="80%">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
					@csrf
					<div class="flex justify">
						<div class="bg-gray-100 w-24 h-24 rounded-full hover:bg-gray-300">
							<a href="/"><img class="rounded mx-auto d-block " src="/register_login/images/logo register.png" alt=""></a>
						</div>
					</div>

					<span class="login100-form-title p-b-43">
						Create Your Free Account!
					</span>
					<x-jet-validation-errors class="mb-4" />
					<div>
						<x-jet-label for="name" value="{{ __('Name') }}" />
						<x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
					</div>

					<div class="mt-4">
						<x-jet-label for="email" value="{{ __('Email') }}" />
						<x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
					</div>

					<div class="mt-4">
						<x-jet-label for="nik" value="{{ __('Nomor Induk Kependudukan') }}" />
						<x-jet-input id="nik" class="block mt-1 w-full" type="number" name="nik" :value="old('nik')" required />
					</div>

					<div class="mt-4">
						<x-jet-label for="npwp" value="{{ __('NPWP') }}" />
						<x-jet-input id="npwp" class="block mt-1 w-full" type="number" name="npwp" :value="old('npwp')" />
					</div>

                <div class="flex justify-center">
                    <p>Already have an account?</p>
                    <a href="" class="text-green-400 hover:text-green-700 active:text-green-800 pl-2">login</a>
                </div>

					<div class="mt-4">
						<x-jet-label for="password" value="{{ __('Password') }}" />
						<x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
					</div>

					<div class="mt-4">
						<x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
						<x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
					</div>

					<div class="mb-3 form-check">
						<input type="checkbox" class="form-check-input" name="terms" id="terms">
						<label class="form-check-label" for="exampleCheck1">Check me out</label>
					</div>

					{{-- <div class="mt-4">
						<x-jet-label for="terms">
							<div class="flex items-center">
								<x-jet-checkbox name="terms" id="terms" />
								<div class="ml-2">
									{!! __('I agree to the :terms_of_service and :privacy_policy', [
									'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
									'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
									]) !!}
								</div>
							</div>
						</x-jet-label>
					</div> --}}

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Register
						</button>
					</div>
					<div class="d-flex flex-row-reverse">
						<div class="p-2">Already have an account? <a href="/login" class="link-secondary ">Login</a></div>
					</div>

				</div>
			</form>

			<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
			</div>
		</div>
	</div>
	</div>


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