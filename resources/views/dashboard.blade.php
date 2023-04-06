<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <a href="{{route('addCity')}}" class="rounded-full bg-slate-400">add City</a>
    <a href="{{route('addCategory')}}" class="rounded-full bg-slate-400">add category</a>
</x-app-layout>
