<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <p> Hi {{ Auth::User()->name }} </p>
    </x-slot>

    
</x-app-layout>
