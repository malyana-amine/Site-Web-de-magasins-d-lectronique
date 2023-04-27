<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>shop</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
	
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">


</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

  @include('comp.usernav')




    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
            <!-- Items -->
            <div class="grid grid-flow-col gap-4">

              @foreach ($products5 as $product5)
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/{{$product5->image}}" class="w-full h-full object-cover" alt="...">
                </div>
                @endforeach

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

      <div class=" flex justify-center text-black">
        <h1 class=" text-2xl font-bold uppercase " >products</h1>
      </div>

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


    <footer class=" mx-auto bg-gray-300 w-full py-8 border-t  border-gray-400">
        <section class="container mx-auto text-center py-6 mb-12 ">
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-black">
              Call to Action
            </h2>
            <div class="w-full mb-4">
              <div class="h-1 mx-auto  w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <h3 class="my-4 text-black text-3xl leading-tight">
              Main Hero Message to sell yourself!
            </h3>
    
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
    
              <li class="mr-3">
                <a class="mx-auto lg:mx-0 hover:underline bg-yellow-200 text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" href="{{ route('user') }}">star my bisuness</a>
              </li>
    
          </section>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>

</html>
