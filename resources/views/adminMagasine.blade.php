<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>magasines</title>
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
                        <h1 class="font-bold pl-2">Magasines</h1>
                    </div>
                </div>

                <div class="flex flex-wrap">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                          <th scope="col" class="px-6 py-3">MAGAZINES NAME</th>
                          <th scope="col" class="px-6 py-3">ACTION</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($magazines as $item)
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                          <td class="px-6 py-4">{{ $item->name }}</td>
                          @if ($item->status == 1)
                          <td class="px-6 py-4">
                            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{ route('aproveMagasine',$item->id) }}">Approve</a>
                          </td>
                          @else
                          <td class="px-6 py-4">
                            <button class="bg-green-500 text-white font-bold py-2 px-4 rounded" disabled>Approved</button>
                          </td>
                          @endif
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  

                </div>
            </div>
        </section>
    </div>
</main>

</body>

</html>
