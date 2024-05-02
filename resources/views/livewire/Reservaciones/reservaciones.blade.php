<div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Cliente</th>
                <th scope="col">Paquete</th>
                <th scope="col">Sucursal</th>
                <th scope="col">Fecha Evento</th>
                <th scope="col">Hora Evento</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $item)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $item->id }} </th>
                    <td scope="col">{{ $item->cliente }}</td>
                    <td scope="col">{{ $item->nombre_paquete }}</td>
                    <td scope="col">{{ $item->sucursal }}</td>
                    <td scope="col">{{ date('d-m-Y', strtotime($item->fecha_evento)) }}</td>
                    <td scope="col">{{ $item->hora_evento }}</td>
                    <td scope="col">
                        <button wire:click="show({{ $item->id }})" class="px-2 py-1 bg-blue-200 text-blue-500 hover:bg-blue-500 hover:text-white rounded">Detalles</button>

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
