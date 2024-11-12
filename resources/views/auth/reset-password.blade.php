{{-- <x-guest-layout> --}}
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
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <div class="container">
            <div class="top-section">
                <h1 class="welcome-text">Password<br>Reset Request</h1>
            </div>

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div class="main-section">
                <div class="input-container">
                    {{-- <div class="relative"> --}}

                        <!-- Name -->
                        {{-- <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div> --}}
                        {{-- <input type="text" id="floating_filled" class="block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " /> --}}
                        {{-- <label for="floating_filled" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">USERNAME</label> --}}
                    {{-- </div>       --}}
                    <div class="relative" id="cont_2">
                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                        {{-- <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div> --}}
                        {{-- <input type="text" id="floating_filled" class="block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " /> --}}
                        {{-- <label for="floating_filled" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">EMAIL</label> --}}
                    </div>
                    <div class="relative" id="cont_2">
                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                        <!-- Password -->
                        {{-- <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div> --}}
                        {{-- <input type="text" id="floating_filled" class="block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " /> --}}
                        {{-- <label for="floating_filled" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">PASSWORD</label> --}}
                    </div>  
                    <div class="relative" id="cont_2">
                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                            type="password"
                                            name="password_confirmation" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                        <!-- Confirm Password -->
                        {{-- <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                            type="password"
                                            name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div> --}}
                        {{-- <input type="text" id="floating_filled" class="block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " /> --}}
                        {{-- <label for="floating_filled" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">PASSWORD</label> --}}
                    </div>      
                    
                    <div class="sign-in-container">
                        <div class="sign-in-text">Reset</div>
                        <x-primary-button class="arrow-button">
                            {{-- {{ __('Register') }} --}}
                            <img src="{{ asset('arrow-right (1).png') }}" alt="img" style="width: 50px; height: 50px;" class="loading-page">                            
                        </x-primary-button>
                        {{--  --}}
                        {{-- <div class="flex items-center justify-end mt-4"> --}}
                            {{-- <x-primary-button> --}}
                                {{-- {{ __('Reset Password') }} --}}
                            {{-- </x-primary-button> --}}
                        {{-- </div> --}}
                        {{--  --}}
                        {{-- <button class="arrow-button" href="/login"> --}}
                            {{-- <img src="{{ asset('arrow-right (1).png') }}" alt="img" style="width: 50px; height: 50px;" class="loading-page"> --}}
                            {{-- <span class="arrow"></span> --}}
                        {{-- </button> --}}
                    </div>
                    
                    {{-- <div class="flex items-center justify-end mt-4">

                    </div> --}}
                    {{-- asli --}}
                    {{-- <div class="bottom-links"> --}}
                        {{-- <a href="/login">Sign In</a> --}}
                        {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Sign In') }}
                        </a>            --}}
                    {{-- </div> --}}
                    
                </div>
       
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
        background-color: #C0EBA6 ;
        padding: 40px 30px;
    }

    .welcome-text {
        color: #54473F;
        font-size: 2.5rem;
        line-height: 1.2;
        margin-top: 30px;
        margin-bottom: 10px;
        font-family: 'Poppins', sans-serif;
        font-weight: 600; /* Semi-bold weight */
    }

    .main-section {
        background-color: #fff5e0;
        flex: 1;
        padding: 0px 40px 250px 40px;
    }

    .input-container {
        
        /* margin: 20px auto; */
        margin-top: 50px;
        max-width: 400px;
        width: 100%;
    }

    .relative input, .relative label {
        font-family: 'Poppins', sans-serif; /* Apply Poppins font */
        color: #5bb4dd;
    }

    #cont_2 {
        margin-top: 30px;
    }

    #cont_3 {
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
        margin-top: 70px;
        /* margin: 30px 20px; */
    }

    .sign-in-text {
        font-size: 2rem;
        color: #5bb4dd;
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
        border: 2px solid #5bb4dd;
    }

    .bottom-links {
        display: flex;
        margin-top: 80px;
        justify-content: space-between;
        /* padding: 20px; */
        font-size: 1rem;
    }

    .bottom-links a {
        color: #5bb4dd;
        text-decoration: none;
    }

</style>
{{-- styling --}}
