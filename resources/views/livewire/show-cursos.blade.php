<div>
    <input wire:model="searchCursos" type="text" placeholder="search alumnos..." class="w-full my-3">
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
                        {{-- @foreach($maestros->clases as $asignacion)
                    {{$asignacion->curso_id}}
                        @endforeach --}}
                    </td>
                    <td class="px-6 py-4 flex flex-row gap-6">
                        <a href="{{route("cursos.edit", $curso->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <form action="{{route("cursos.destroy", $curso->id)}}" method="POST">
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
