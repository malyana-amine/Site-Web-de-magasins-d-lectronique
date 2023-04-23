<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>store</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


        <!-- Styles -->

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased leading-normal tracking-normal text-orange-200 bg-red-500" >
        <div class="">
            <nav id="header" class="fixed w-full z-30 top-0 text-black">
                <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
                  <div class="pl-4 flex items-center">
                    <a class=" text-black no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="{{url('/')}}">
                      store
                    </a>
                  </div>
                  <div class="block lg:hidden pr-4">
                    <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                     menu
                    </button>
                  </div>
                  <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
                    <ul class="list-reset lg:flex justify-end flex-1 items-center">
                        @if (Route::has('login'))
                    
                        @auth
                      <li class="mr-3">
                        <a class="mx-auto lg:mx-0 hover:underline bg-yellow-200 text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" href="{{ route('client') }}">get started</a>
                      </li>
                      @else
                      <li class="mr-3">
                        <a class="mx-auto lg:mx-0 hover:underline bg-yellow-200 text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" href="{{ route('login') }}">login</a>
                      </li>
                      @if (Route::has('register'))
                      <li class="mr-3">
                        <a class="mx-auto lg:mx-0 hover:underline bg-yellow-200 text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" href="{{ route('register') }}">register</a>
                      </li>
                      @endif
                      @endauth
                  
                  @endif
                    </ul>

                </div>

                  </div>
                </div>
                <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
              </nav>
                   <div class="pt-24">
      <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
          <p class="uppercase tracking-loose w-full">What business are you?</p>
          <h1 class="my-4 text-5xl font-bold leading-tight">
            Main Hero Message to sell yourself!
          </h1>
          <p class="leading-normal text-2xl mb-8">
            Sub-hero message, not too long and not too short. Make it just right!
          </p>
          {{-- <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Subscribe
          </button> --}}
          <ul class="list-reset lg:flex justify-end flex-1 items-center">
            {{-- @if (Route::has('login'))
        
            @auth --}}
          <li class="mr-3">
            <a class="mx-auto lg:mx-0 hover:underline bg-yellow-200 text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" href="{{ route('client') }}">get started</a>
          </li>
          {{-- @elseif (Route::has('register'))
          <li class="mr-3">
            <a class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" href="{{ route('register') }}">register</a>
          </li>
          
          @endauth
      
      @endif --}}
        </div>
     
        <div class="w-full md:w-3/5 py-6 text-center">
          <img class="w-full md:w-4/5 z-50" src="/images/hero.png" />
        </div>
      </div>
    </div> 

    <section class="bg-white border-b py-8">
        <div class="container max-w-5xl mx-auto m-8">
          <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
            Title
          </h2>
          <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
          </div>
          <div class="flex flex-wrap">
            <div class="w-5/6 sm:w-1/2 p-6">
              <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                Lorem ipsum dolor sit amet
              </h3>
              <p class="text-gray-600 mb-8">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.
                <br />
                <br />
              </p>
            </div>
  
          </div>
  
        </div>
      </section>

      <section class="container mx-auto text-center py-6 mb-12">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">
          Call to Action
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <h3 class="my-4 text-3xl leading-tight">
          Main Hero Message to sell yourself!
        </h3>

        <ul class="list-reset lg:flex justify-end flex-1 items-center">

          <li class="mr-3">
            <a class="mx-auto lg:mx-0 hover:underline bg-yellow-200 text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" href="{{ route('user') }}">star my bisuness</a>
          </li>

      </section>

            
           
    </body>
</html>
