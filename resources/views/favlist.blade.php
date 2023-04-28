<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>my favorite list</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
	
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">


</head>

<body class=" min-h-screen bg-white flex flex-col text-gray-600 work-sans leading-normal text-base tracking-normal">

  @include('comp.usernav')

<h1 class="pt-20 "></h1>
<div class=" flex justify-center text-black">
  <h1 class=" text-2xl font-bold uppercase " >my favorite list</h1>
</div>
  <table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
        <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($favorites as $favorite)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{ $favorite->name }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <form action="{{ route('removefavorite', $favorite->favorite_id) }}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="text-red-600 hover:text-red-900">Remove</button>
                    </form>
                    
                    
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
  

    {{-- <footer class=" mx-auto bg-white py-8 border-t border-gray-400"> --}}
      
      
      <div class="  mt-auto bg-gray-300 w-full py-8 border-t  border-gray-400">
        <section class="container mx-auto text-center py-6 mb-12 ">
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">
              Call to Action
            </h2>
            <div class="w-full mb-4">
              <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <h3 class="my-4 text-white text-3xl leading-tight">
              Main Hero Message to sell yourself!
            </h3>
    
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
    
              <li class="mr-3">
                <a class="mx-auto lg:mx-0 hover:underline bg-yellow-200 text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" href="{{ route('user') }}">star my bisuness</a>
              </li>
    
          </section>
    </div> 
         
    {{-- </footer> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>

</html>
