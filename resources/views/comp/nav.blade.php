<nav aria-label="menu nav" class="bg-gray-800 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">

    <div class="flex flex-wrap items-center">
        <div class="flex flex-shrink md:w-1/3 justify-center uppercase font-extrabold text-2xl md:justify-start text-white">
            admin
        </div>

        <div class="flex flex-1 md:w-1/3 justify-center md:justify-start text-white px-2">

        </div>

        <div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end">
            <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                <li class="flex-1 md:flex-none md:mr-3">

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="bg-transparent hover:bg-white hover:bg-opacity-50 text-white font-semibold py-2 px-4  hover:border-transparent text-lg rounded" href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                    </a>
                    </form>



                </li>
                <li class="flex-1 md:flex-none md:mr-3">
                    <a class="bg-transparent hover:bg-white hover:bg-opacity-50 text-white font-semibold py-2 px-4  hover:border-transparent text-lg rounded" href="{{route('profile.edit')}}">profile</a>
                </li>
            </ul>
        </div>
    </div>

</nav>