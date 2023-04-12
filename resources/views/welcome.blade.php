<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


        <!-- Styles -->

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased" >
        <div style="background-image: url('{{ asset('images/iam_os-zOWIimSy12Q-unsplash.jpg') }}')" class="relative bg-slate-600 sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="bg-transparent hover:bg-white hover:bg-opacity-50 text-white font-semibold py-2 px-4  hover:border-transparent text-lg rounded">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="bg-transparent hover:bg-white hover:bg-opacity-50 text-white font-semibold py-2 px-4  hover:border-transparent text-lg rounded">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 bg-transparent hover:bg-white hover:bg-opacity-50 text-white font-semibold py-2 px-4  hover:border-transparent text-lg rounded">Register</a>
                        @endif
                    @endauth
                </div>
                @endif
                <div>
                    <p class=" text-3xl font-extrabold text-white py-20">Do you want to buy a product</p>
                    <p class=" text-xl font-extrabold text-white ">This site makes it easy for you to purchase before you go to the seller.<br> can see all the products available on it before you waste your time in the store</p>
                    <p class=" text-xl font-extrabold text-white ">You are welcome anytime</p>

                    <div>
                        @if (Route::has('login'))
                        
                            @auth
                                <a href="{{ url('/dashboard') }}" class="bg-transparent hover:bg-white hover:bg-opacity-50 text-white font-semibold py-2 px-4  hover:border-transparent text-lg rounded">Dashboard</a>
                            @else

                            <p class=" text-xl font-extrabold text-white ">Register for a better experience : </p>
                            <a href="{{ route('register') }}" class="ml-4 bg-transparent hover:bg-white hover:bg-opacity-50 text-white font-semibold py-2 px-4 hover:border-transparent text-lg rounded">Register</a>
                    
                    @endif
                    @endauth
                </div>
            </div>
            
           
    </body>
</html>
