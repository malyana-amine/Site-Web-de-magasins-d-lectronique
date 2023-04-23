

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
</head>
<body>
    
    
    <div class="bg-gray-100 py-6 sm:py-8">
        <div class="max-w-md mx-auto px-4 sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-md">
                <div class="bg-white py-6 sm:py-8 px-4 sm:px-10">
                    <h2 class="text-center text-2xl font-bold mb-4">Register</h2>
              <form method="POST" action="{{ route('register') }}"  class="space-y-6" action="#" method="POST">
                @csrf
                  <div>
                      <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                      <input type="text" name="name" id="name" autocomplete="name" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50">
                    </div>
                    <div>
                  <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                  <input type="email" name="email" id="email" autocomplete="email" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                    <input type="password" name="password" id="password" autocomplete="new-password" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="password_confirmation" class="block text-gray-700 font-bold mb-2">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" autocomplete="new-password" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="age" class="block text-gray-700 font-bold mb-2">Age</label>
                    <input type="number" name="age" id="age" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring focus:ring-green-500 focus:ring-opacity-50">
                </div>
                <div>
                  <label class="block text-gray-700 font-bold mb-2">Gender</label>
                  <div class="mt-2">
                      <div>
                          <label for="gender_male" class="inline-flex items-center">
                              <input type="radio" name="gender" id="gender_male" value="0" class="form-radio" checked>
                              <span class="ml-2">Male</span>
                            </label>
                        </div>
                        <div>
                            <label for="gender_female" class="inline-flex items-center">
                                <input type="radio" name="gender" id="gender_female" value="1" class="form-radio">
                                <span class="ml-2">Female</span>
                            </label>
                        </div>
                        
                </div>
                </div>
                <div>
                    <button type="submit" class="w-full mx-auto lg:mx-0 hover:underline bg-yellow-200 text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">Register</button>

                </div>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('login')}}">
                    Already have an Account
                  </a>
              </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>