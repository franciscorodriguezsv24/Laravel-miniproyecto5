<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Maestros
            
        </h2>
        <a href="{{route('Usuarios.create')}}" class="bg-sky-500 rounded-full  text-white p-2 hover:bg-sky-700">Agregar Maestro</a>
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
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Rol
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($usuarios as $usuario) --}}
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{-- {{$usuario->id}} --}}
                        </th>
                        <td class="px-6 py-4">
                        {{-- {{$usuario->name}} --}}
                        </td>
                        <td class="px-6 py-4">
                        {{-- {{$usuario->email}} --}}
                        </td>
                        <td class="px-6 py-4">
                        {{-- @if ($usuario->HasRole('admin')) --}}
                            <span class="bg-red-400 p-1 text-white rounded">Admin</span>
                        {{-- @endif --}}
                        {{-- @if ($usuario->HasRole('editor')) --}}
                            {{-- <span class="bg-green-600 p-1 text-white rounded">editor</span> --}}
                        {{-- @endif --}}
                        </td>
                        <td class="px-6 py-4 flex flex-row gap-6">
                            <a href="{{--{{route("Usuarios.edit", $usuario->id)}}--}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            {{-- <form action="{{route("Usuarios.destroy", $usuario->id)}}" method="POST"> --}}
                                {{-- @csrf --}}
                                {{-- @method("DELETE") --}}
                                <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                            </form>
                            
                        </td>
                    </tr>
                {{-- @endforeach --}}
                
            </tbody>
        </table>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>