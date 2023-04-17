<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Starter Template - Nordic Shop: Tailwind Toolbox</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
	
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">


</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">



    <nav id="header" class="fixed z-50 top-0 w-full bg-white border-b border-gray-200">
        <div class="container flex items-center justify-between mx-auto py-3 px-4 md:px-0">
          
          <!-- Mobile menu toggle -->
          <label for="menu-toggle" class="md:hidden">
            <svg class="w-6 h-6 fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <title>menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
          </label>
          <input class="hidden" type="checkbox" id="menu-toggle" />
      
          <!-- Logo -->
          <a class="flex items-center text-xl font-bold tracking-wide text-gray-800 hover:text-black" href="#">
            NORDICS
          </a>
      
      
          <!-- Filter by city and search -->
          <form method="GET" action="{{ route('serchproduct')}}" class="hidden md:block flex items-center space-x-4">
            <select name="city" class="py-1 px-2 text-sm text-gray-700 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
              <option value="" disabled selected>Filter by city</option>
              @foreach($cities as $city)
              <option value="{{$city->id}}"><button>{{$city->name}}</button></option>
            @endforeach
            </select>
            <select name="category" class="py-1 px-2 text-sm text-gray-700 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
              <option value="" disabled selected>Filter by category</option>
              @foreach($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
            </select>
            <input name="search" type="text" class="py-1 px-2 text-sm text-gray-700 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" placeholder="Search...">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                <i class="fas fa-search"></i> Search
              </button>
          </form>
      
          <!-- User name and log out -->
          <div class="hidden md:block flex items-center space-x-4">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                    {{-- <div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end"> --}}
                        <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                            <li class="flex-1 md:flex-none md:mr-3">
            
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
            
                                    <a class="bg-transparent hover:bg-white hover:bg-opacity-50 text-black font-semibold py-2 px-4  hover:border-transparent text-lg rounded" href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                </a>
                                </form>
            
            
            
                            </li>
                            <li class="flex-1 md:flex-none md:mr-3">
                                <a class="bg-transparent hover:bg-white hover:bg-opacity-50 text-black font-semibold py-2 px-4  hover:border-transparent text-lg rounded" href="{{route('profile.edit')}}">profile</a>
                            </li>
                        </ul>
                    {{-- </div> --}}
                    @else
                        <a href="{{ route('login') }}" class="bg-transparent hover:bg-white hover:bg-opacity-50 text-white font-semibold py-2 px-4  hover:border-transparent text-lg rounded">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 bg-transparent hover:bg-white hover:bg-opacity-50 text-black font-semibold py-2 px-4  hover:border-transparent text-lg rounded">Register</a>
                        @endif
                    @endauth
                </div>
                @endif
          </div>
      
        </div>
      </nav> 



      <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Items -->
            <div class="grid grid-flow-col gap-4">
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/1680793564.jpg" class="w-full h-full object-cover" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/1680793564.jpg" class="w-full h-full object-cover" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/1680793564.jpg" class="w-full h-full object-cover" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/1680793564.jpg" class="w-full h-full object-cover" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/1680793564.jpg" class="w-full h-full object-cover" alt="...">
                </div>
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 bg-white rounded-full opacity-50 hover:opacity-100 focus:opacity-100 focus:outline-none" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 bg-white rounded-full opacity-50 hover:opacity-100 focus:opacity-100 focus:outline-none" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 bg-white rounded-full opacity-50 hover:opacity-100 focus:opacity-100 focus:outline-none" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 bg-white rounded-full opacity-50 hover:opacity-100 focus:opacity-100 focus:outline-none" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 bg-white rounded-full opacity-50 hover:opacity-100 focus:opacity-100 focus:outline-none" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-1/2 left-4 z-30 p-2 bg-white bg-opacity-30 hover:bg-opacity-50 focus:bg-opacity-50 focus:outline-none transform -translate-y-1/2" data-carousel-prev>
            <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </button>
        <button type="button" class="absolute top-1/2 right-4 z-30 p-2 bg-white bg-opacity-30 hover:bg-opacity-50 focus:bg-opacity-50 focus:outline-none transform -translate-y-1/2" data-carousel-next>
            <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </button>
    </div>
    

    <section class="bg-white py-8">

        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            @foreach ($products as $product)
              <div class="w-full sm:w-1/2 md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                <a href="{{route('viewproduct',$product->id)}}" class="group">
                  <img class="w-full hover:scale-110 transition duration-300 ease-in-out transform hover:shadow-lg" src="/images/{{$product->image}}">
                  <div class="pt-3 flex items-center justify-between">
                    <p class="text-gray-900 font-medium group-hover:text-blue-600">{{$product->name}}</p>
                  </div>
                  <p class="pt-1 text-gray-900">{{$product->price}}DH</p>
                </a>
              </div>
            @endforeach
          </div>
          

    </section>


    <footer class="container mx-auto bg-white py-8 border-t border-gray-400">
        <div class="container flex px-3 py-8 ">
            <div class="w-full mx-auto flex flex-wrap">
                <div class="flex w-full lg:w-1/2 ">
                    <div class="px-3 md:px-0">
                        <h3 class="font-bold text-gray-900">About</h3>
                        <p class="py-4">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel mi ut felis tempus commodo nec id erat. Suspendisse consectetur dapibus velit ut lacinia.
                        </p>
                    </div>
                </div>
                <div class="flex w-full lg:w-1/2 lg:justify-end lg:text-right">
                    <div class="px-3 md:px-0">
                        <h3 class="font-bold text-gray-900">Social</h3>
                        <ul class="list-reset items-center pt-3">
                            <li>
                                <a class="inline-block no-underline hover:text-black hover:underline py-1" href="#">Add social links</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>

</html>
