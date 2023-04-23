
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
	
</head>
<body class="bg-gray-100">
    
    <div class="max-w-md mx-auto mt-10 ">
        <form method="POST" action="{{ route('login') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="email">
                    Email
                </label>
                <input
                class="w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                id="email" name="email" type="email" placeholder="Email">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2" for="password">
                    Password
                </label>
                <input
                class="w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50"
                id="password" name="password" type="password" placeholder="Password">
               
            </div>
              <div class="mb-6">
                <label class="inline-flex items-center text-gray-700 font-bold">
                  <input type="checkbox" class="form-checkbox h-5 w-5 text-indigo-600">
                  <span class="ml-2">Remember me</span>
                </label>
                <a href="{{ route('password.request')}}" class="text-sm float-right text-gray-600 hover:text-gray-800" >Forgot Password?</a>
            </div>
            <div class="flex items-center justify-between">
                <div>
                    <button type="submit" class="mx-auto lg:mx-0 hover:underline bg-yellow-200 text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">login</button>
                </div>
            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('register')}}">
                  Create an Account
                </a>
            </div>
            </form>
          </div>
          
          
        </body>
        </html>