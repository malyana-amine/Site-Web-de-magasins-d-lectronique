<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Admin Starter Template : Tailwind Toolbox</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>

</head>

<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">

<header>
@include('comp.navprop')
  
</header>


<main>

    <div class="flex flex-col md:flex-row">
       @include('comp.sidebaruser')
         <section class="w-full ">
            <div id="main" class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5 h-screen "> 

               <div class="bg-gray-800 pt-3">
                    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                        <h1 class="font-bold pl-2">create my magasine</h1>
                    </div>
                </div>

                <div class="flex flex-wrap w-full">

                    <form method="POST" enctype="multipart/form-data" action="{{ route('storeMagasine')}}">
                        @csrf
                        <div class="mb-6">
                          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                          <input value="{{$data->name}}" type="email" name="name" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
                        </div>
                        <div class="mb-6">
                          <label for="adress" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your adress</label>
                          <input value="{{$data->adress}}" type="adress" name="adress" id="adress" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="mb-6">
                            
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
                    <select name="city_id" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      {{-- <option selected>Choose a country</option>
                      
                      @foreach()
                        <option value="{{$city->id}}">{{$city->name}}</option>
                      @endforeach
                    </select> --}}
                    <option>Choose a category</option>
                    @foreach ($cities as $city)
                      @if ($data->city_id == $city->id)
                        <option selected value="{{$city->id}}">{{$city->name}}</option>
                      @else 
                        <option value="{{$city->id}}">{{$city->name}}</option>
                      @endif
                    @endforeach
                  </select>
                    
                        </div>
                        <div class="mb-6">
                            
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                    <input name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                     <div class="mb-6">
                        <label for="telenumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your telenumber</label>
                        <input value="{{$data->teleNumber}}" type="telenumber" name="teleNumber" id="telenumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                      </div>
                        </div>
                        <div class="flex items-start mb-6">
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                      </form>
                    

                </div>

                </div> 
            </div>
        </section>
    </div>
</main>

</body>

</html>
