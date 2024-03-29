<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cities</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>

</head>

<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">

<header>
@include('comp.nav')
  
</header>


<main>

    <div class="flex flex-col md:flex-row">
       @include('comp.sidebar')
        <section class="w-full ">
            <div id="main" class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5 h-screen ">

                <div class="bg-gray-800 pt-3">
                    <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                        <h1 class="font-bold pl-2">cities</h1>
                    </div>
                </div>

                <div class="flex flex-wrap w-full">

                    <div class="flex w-full flex-wrap p-6">
                        <form method="POST" action="{{ route('store')}}" class="mb-6 w-full">
                          @csrf
                          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City Name</label>
                          <input name="name" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="City Name" required>
                          <button type="submit" class="px-5 py-2.5 mt-4 text-sm font-medium text-white bg-blue-700 rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300 hover:bg-blue-800 w-full sm:w-auto text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </form>
                      
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                          <thead class="bg-gray-50 dark:bg-gray-700 text-xs text-gray-700 uppercase">
                            <tr>
                              <th scope="col" class="px-6 py-3">City Name</th>
                              <th scope="col" class="px-6 py-3">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($data as $item)
                            <tr class="bg-white dark:bg-gray-900 border-b dark:border-gray-700">
                              <td class="px-6 py-4">{{ $item->name }}</td>
                              <td class="px-6 py-4">
                                <a href="{{ route('deleteCity',$item->id) }}" class="text-blue-700 dark:text-blue-400 hover:underline">Delete</a>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      
                
                </div>
        </section>
    </div>
</main>

</body>

</html>
