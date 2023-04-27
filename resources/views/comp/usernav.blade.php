<nav id="header" class="fixed z-50 top-0 w-full bg-gray-300 border-b border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a class=" text-black no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="{{url('/')}}">
        store
      </a>
      <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
        <ul class="flex flex-col justify-between font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-300 md:flex-row md:space-x-8 md:mt-0 md:border-0  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        
          
          <li>
            {{-- <div> --}}
              <form class="bg-gray-300 border border-gray-400 " method="GET" action="{{ route('serchproduct')}}">
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
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">
                    <i class="fas fa-search"></i> Search
                  </button>
              </form>
            {{-- </div> --}}
          </li>
          <li class="px-10 bg-gray-300">
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Dropdown <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                  {{-- <div class="hidden md:block flex items-center space-x-4"> --}}
                    @if (Route::has('login'))
                        {{-- <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right"> --}}
                            @auth
                                {{-- <ul class="list-reset flex justify-between flex-1 md:flex-none items-center"> --}}
                                    <li class="flex-1 md:flex-none md:mr-3">
                    
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                    
                                            <a class="" href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                        </a>
                                        </form>
                    
                    
                    
                                    </li>
                                    <li class="flex-1 md:flex-none md:mr-3">
                                        <a class="" href="{{route('profile.edit')}}">profile</a>
                                    </li>
                                {{-- </ul> --}}
                            @else
                                <a href="{{ route('login') }}" class="">Log in</a>
        
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 ">Register</a>
                                @endif
                            @endauth
                        {{-- </div> --}}
                        @endif
                  {{-- </div> --}}
                </ul>
            </div>
       
        </li>
        <li class="px-10 bg-gray-300">
            <a href="{{ route('favprodcts') }}">fav product</a>
        </li>
        </ul>
      </div>
    </div>
  </nav>