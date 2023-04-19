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

                <div class="flex flex-wrap w-full justify-center mt-12">
                  <form method="POST" enctype="multipart/form-data" action="{{ route('storeMagasine')}}" class="w-full max-w-md bg-white rounded-lg shadow-lg px-6 pt-8 pb-6 mb-4">
                    @csrf
                    <div class="mb-4">
                      <label for="magazine_name" class="block mb-1 text-sm font-medium text-gray-700 dark:text-white">Magazine Name</label>
                      <input type="text" name="name" id="magazine_name" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent block w-full py-2 px-3" placeholder="Enter your magazine name" required>
                    </div>
                    <div class="mb-4">
                      <label for="address" class="block mb-1 text-sm font-medium text-gray-700 dark:text-white">Address</label>
                      <input type="text" name="adress" id="address" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent block w-full py-2 px-3" placeholder="Enter your address" required>
                    </div>
                    <div class="mb-4">
                      <label for="city" class="block mb-1 text-sm font-medium text-gray-700 dark:text-white">City</label>
                      <select name="city_id" id="city" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent block w-full py-2 px-3">
                        <option selected disabled>Choose a city</option>
                        @foreach($cities as $city)
                          <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="mb-4">
                      <label for="image" class="block mb-1 text-sm font-medium text-gray-700 dark:text-white">Profile Photo</label>
                      <input type="file" name="image" id="image" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent block w-full py-2 px-3">
                    </div>
                    <div class="mb-4">
                      <label for="telephone" class="block mb-1 text-sm font-medium text-gray-700 dark:text-white">Telephone Number</label>
                      <input type="tel" name="teleNumber" id="telephone" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent block w-full py-2 px-3" placeholder="Enter your telephone number" required>
                    </div>
                    <div class="flex items-center justify-between">
                      <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue" style="transition: all 0.15s ease">Submit</button>
                    </div>
                  </form>
                </div>

                </div> 
            </div>
        </section>
    </div>
</main>

</body>

</html>
