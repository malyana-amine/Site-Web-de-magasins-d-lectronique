<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>product</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
	
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">


</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

  @include('comp.usernav')

    

    <section class="bg-white py-8">

            <div class="bg-white">
                <div class="container mx-auto px-4 py-8">
                  <div class="flex flex-wrap text-center">
                    <div class="w-full md:w-1/2">
                      <img class="w-full" src="/images/{{ $data->image }}" alt="Product Image">
                    </div>
                    <div class="w-full md:w-1/2 px-4 bg-gray-100 flex items-center justify-center flex-col">
                      <h1 class="text-2xl font-bold mb-4">{{ $data->title }}</h1>
                      <div class="text-base mb-4">description : {{ $data->product_description }}</div>
                      <div class="text-base mb-4">adrees : {{ $data->address }}</div>
                      <div class="text-base mb-4">city : {{ $data->city_name }}</div>
                      <div class="text-lg font-bold mb-4">magasine : {{ $data->magasine_name }}</div>
                      <div class="text-3xl font-bold mb-4">{{ $data->price }}DH</div>

                      <a href="{{route('list', $product->id)}}"> add to my list </a>


                    </div>
                  </div>
                </div>
              </div>     

    </section>
    <section class=" container mx-auto bg-white py-8 ">

      
      <div class="p-4 bg-gray-100 rounded-lg">
        @foreach ($comments as $comment)
            
        
        <div class="flex items-center">
          <img src="https://via.placeholder.com/50" alt="Avatar" class="w-10 h-10 rounded-full mr-4">
          <h4 class="text-lg font-bold">{{$comment->name}}</h4>
        </div>
        <div class="mt-4">
          <p class="text-gray-700">{{$comment->comment}}</p>
          @if ($comment->image)
              <img class=" w-32  h-32" src="/images/{{$comment->image}}" alt="Comment Image" class="mt-4">
          @endif
        
        </div>
        @endforeach
        <form method="POST" enctype="multipart/form-data" action="{{ route('addcomment')}}" class="mt-4">
          @csrf
          <input type="text" name="comment" placeholder="Add your comment" class="px-4 py-2 border rounded-md w-full" />
          @if (isset($userAuth) && is_numeric($userAuth))

          <input type="hidden" value="{{ $userAuth }}" name="user_id"/>
      
      @endif
          
          <input type="hidden" value="{{ $product->id }}" name="product_id"/>
          
          <label for="image-upload" class="block mt-2 text-gray-700 cursor-pointer">Upload an Image</label>
          
          <input name="image" id="image-upload" type="file" class="hidden" />
          <button class="bg-black" type="submit">add</button>
        </form>
      </div>
    </section>

    <footer class=" mx-auto bg-white py-8 border-t border-gray-400">
      
      
      <div class=" mx-auto bg-gray-300 w-full py-8 border-t  border-gray-400">
        <section class="container mx-auto text-center py-6 mb-12 ">
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-balck">
              Call to Action
            </h2>
            <div class="w-full mb-4">
              <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <h3 class="my-4 text-balck text-3xl leading-tight">
              Main Hero Message to sell yourself!
            </h3>
    
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
    
              <li class="mr-3">
                <a class="mx-auto lg:mx-0 hover:underline bg-yellow-200 text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out" href="{{ route('user') }}">star my bisuness</a>
              </li>
    
          </section>
    </div>
         
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>

</html>
