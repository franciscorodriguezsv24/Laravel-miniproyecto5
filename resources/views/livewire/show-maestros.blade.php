<div>
    <input wire:model="searchMaestros" type="text" placeholder="search users..." class="w-full my-3">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Correo
                </th>
                <th scope="col" class="px-6 py-3">
                    Direccion
                </th>
                <th scope="col" class="px-6 py-3">
                    Fecha de nacimiento
                </th>
                <th scope="col" class="px-6 py-3">
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($maestros as $maestro)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$maestro->id}}
                    </th>
                    <td class="px-6 py-4">
                    {{$maestro->Nombre}}
                    </td>
                    <td class="px-6 py-4">
                    {{$maestro->Correo}}
                    </td>
                    <td class="px-6 py-4">
                    {{$maestro->Direccion}}
                    </td>
                    <td class="px-6 py-4">
                    {{$maestro->fecha_de_nacimiento}}
                    </td>
                    <td class="px-6 py-4 flex flex-row gap-6">
                        <a href="{{route("maestros.edit", $maestro->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <form action="{{route("maestros.destroy", $maestro->id)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
</div>