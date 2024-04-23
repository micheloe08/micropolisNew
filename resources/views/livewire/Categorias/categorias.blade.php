<div>

    @if($updateMode)
        @include('livewire.Categorias.update')
    @else
        @include('livewire.Categorias.create')
    @endif
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Clave</th>
                <th scope="col">Descripción</th>
                <th scope="col">acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $item)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $item->id }} </th>
                    <td scope="col">{{ $item->clave_categoria }}</td>
                    <td scope="col">{{ $item->descripcion }}</td>
                    <td scope="col">
                        <button wire:click="edit({{ $item->id }})" class="px-2 py-1 bg-blue-200 text-blue-500 hover:bg-blue-500 hover:text-white rounded">Editar</button>
                        <button wire:click="destroy({{ $item->id }})" class="px-2 py-1 bg-red-200 text-red-500 hover:bg-red-500 hover:text-white rounded">Borrar</button>
                    </td>
                </tr>
            @empty
                <tr class="text-center">
                    <td colspan="4" class="py-3 italic">No hay información</td>
                </tr>
            @endforelse
        </tbody>
      </table>
    </div>
</div>
