<nav aria-label="alternative nav">
    <div class="bg-gray-800 shadow-xl h-20 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48 content-center">

        <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
            <ul class="list-reset flex flex-row md:flex-col pt-3 md:py-3 px-1 md:px-2 text-center md:text-left">
                <li class="mr-3 flex-1">
                    <a href="{{route('admin')}}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                        <i class="far fa-chart-bar pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">statistiques</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="{{route('adminMagasine')}}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                        <i class="fas fa-store-alt pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">magasines</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="{{route('adminCity')}}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                        <i class="fas fa-city pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">cities</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="{{route('adminCategory')}}" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-purple-500">
                        <i class="fas fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-400 md:text-gray-200 block md:inline-block">categories</span>
                    </a>
                </li>
            </ul>
        </div>


    </div>
</nav>