<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Maestros
            
        </h2>
        <a href="{{route('maestros.create')}}" class="bg-sky-500 rounded-full  text-white p-2 hover:bg-sky-700">Agregar Maestro</a>
        </div>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div>
       @livewire('show-maestros')
       
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>