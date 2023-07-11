<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Data
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <form class="flex flex-col gap-3" method="POST" action="{{route('alumnos.store')}}">
                            @csrf
                            
                            <label for="Clase">Clase:</label>
                            <input type="text" name="Clase" id="Clase" required>
    
    
                            <button type="submit" class="text-white bg-sky-950 p-1 rounded-md">Crear usuario</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>