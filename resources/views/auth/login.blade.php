{{-- <x-guest-layout> --}}
    <!-- Session Status -->
    {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

{{-- header --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Farmer Login</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
{{-- header --}}

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="container">
            <div class="top-section">
                <h1 class="welcome-text">Welcome<br>Smart Farmer</h1>
            </div>
            
            <div class="main-section">
                <div class="input-container">
                    <div class="relative">
                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        {{-- <input type="text" id="floating_filled" class="block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="floating_filled" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">USERNAME</label> --}}
                    </div>      
                    <div class="relative" id="cont_2">
                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="current-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        {{-- <input type="text" id="floating_filled" class="block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="floating_filled" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">PASSWORD</label> --}}
                    </div>    
                    
                    <div class="sign-in-container">
                        <div class="sign-in-text">Sign In</div>
                        {{-- <button class="arrow-button"> --}}
                            {{-- <img src="{{ asset('right_arrow.png') }}" alt="img" style="width: 50px; height: 50px;" class="loading-page"> --}}
                            {{-- <span class="arrow"></span> --}}
                        {{-- </button> --}}
                        <x-primary-button class="arrow-button">
                            {{-- {{ __('Log in') }} --}}
                            <img src="{{ asset('right_arrow.png') }}" alt="img" style="width: 50px; height: 50px;" class="loading-page">
                        </x-primary-button>
                    </div>
        
                    <div class="bottom-links">
                        <a href="/register">Sign up</a>
                        {{-- forgot --}}
                        {{-- <div class="flex items-center justify-end mt-4"> --}}
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                
                        {{-- </div> --}}
                    </div>
                    
                </div>

                <!-- Remember Me -->
                {{-- <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div> --}}
       
            </div>

        </div>
    </form>
{{-- </x-guest-layout> --}}

{{-- styling --}}
<style>
    * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .container {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .top-section {
            background-color: #fff5e0;
            padding: 40px 20px;
        }

        .welcome-text {
            color: #5bb4dd;
            font-size: 2.5rem;
            line-height: 1.2;
            margin-top: 90px;
            margin-bottom: 10px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600; /* Semi-bold weight */
        }

        .main-section {
            background-color: #C0EBA6;
            flex: 1;
            padding: 70px 40px;
        }

        .input-container {
            
            /* margin: 20px auto; */
            margin-top: 50px;
            max-width: 400px;
            width: 100%;
        }

        .relative input, .relative label {
            font-family: 'Poppins', sans-serif; /* Apply Poppins font */
        }

        #cont_2 {
            margin-top: 30px;
        }

        input {
            border: none;
            outline: none;
            width: 100%;
            font-size: 1rem;
            color: #666;
            background: transparent;
        }

        .sign-in-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 100px;
            /* margin: 30px 20px; */
        }

        .sign-in-text {
            font-size: 2rem;
            color: #444;
            font-weight: bold;
        }

        .arrow-button {
            width: 75px;
            height: 75px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
        }

        .bottom-links {
            display: flex;
            margin-top: 125px;
            justify-content: space-between;
            /* padding: 20px; */
            font-size: 1rem;
        }

        .bottom-links a {
            color: #444;
            text-decoration: none;
        }
</style>
{{-- styling --}}
