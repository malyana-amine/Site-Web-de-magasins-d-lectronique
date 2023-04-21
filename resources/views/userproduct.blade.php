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
                        <h1 class="font-bold pl-2">Statistiques</h1>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row w-full">

                  <form method="POST" enctype="multipart/form-data" action="{{ route('productsAdd')}}" class="flex-1 bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8 mb-8 md:mr-8">
                    @csrf
                    <div class="mb-4">
                      <label for="product_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
                      <input type="text" name="name" id="product_name" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter product name" required>
                    </div>
                    <div class="mb-4">
                      <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                      <textarea name="description" id="description" rows="3" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter product description" required></textarea>
                    </div>
                
                    <div class="mb-4">
                      <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Add Product Photo</label>
                      <input  accept=".jpg, .jpeg, .png" name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-100 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input"  type="file">
                    </div> 
                
                    <div class="mb-4">
                      <label for="categories" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a Category</label>
                      <select name="categ_id" id="categories" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose a category</option>
                        @foreach ($Categories as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                      </select>
                    </div>
                
                    <div class="mb-4">
                      <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                      <input type="number" name="price" id="price" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter product price" required>
                    </div>
                
                    <div class="flex items-center justify-between">
                      <button type="submit" class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </div>
                  </form>
                
                  <div class="flex-1 bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Product Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr class="bg-gray-50 dark:bg-gray-900 border-b dark:border-gray-700">
                                <td class="px-6 py-4">{{ $product->name }}</td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('deleteProduct',$product->id) }}" class="text-red-500 hover:text-red-600">Delete</a> |
                                    <a href="{{ route('editProduct',$product->id) }}" class="text-yellow-500 hover:text-yellow-600">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                
                </div>

                </div> 
            </div>
        </section>
    </div>
</main>

</body>

</html>
