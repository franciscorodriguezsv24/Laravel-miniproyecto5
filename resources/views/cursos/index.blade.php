<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Clases
            
        </h2>
        <a href="{{route('cursos.create')}}" class="bg-sky-500 rounded-full  text-white p-2 hover:bg-sky-700">Agregar clase</a>
        </div>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div>
        <input wire:model="search" type="text" placeholder="search users..." class="w-full my-3">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Clase
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Maestro
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Inscritos
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cursos as $curso)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$curso->id}}
                        </th>
                        <td class="px-6 py-4">
                        {{$curso->Clase}}
                        </td>
                        
                        <td class="px-6 py-4">
                        {{$curso->Inscritos}}
                        </td>
                        <td class="px-6 py-4">
                            @foreach($maestros->clases as $asignacion)
                        {{$asignacion->curso_id}}
                            @endforeach
                        </td>
                        <td class="px-6 py-4 flex flex-row gap-6">
                            <a href="{{route("cursos.edit", $curso->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            {{-- <form action="{{route("Usuarios.destroy", $usuario->id)}}" method="POST"> --}}
                                {{-- @csrf --}}
                                {{-- @method("DELETE") --}}
                                <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                            </form>
                            
                        </td>
                    </tr>
                    @endforeach
                
            </tbody>
        </table>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>