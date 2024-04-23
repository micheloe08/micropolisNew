

<div class="grid gap-6 mb-6 md:grid-cols-2">
    <div>
        <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre Sucursal</label>
        <input type="text" id="nombre" wire:model.defer ="nombre" class="{{ $errors->has('nombre') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Sucursal">
        @error('nombre')
        <span class="text-red-500 text-xs italic">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="telefono" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teléfono</label>
        <input type="text" id="telefono" wire:model.defer ="telefono" class="{{ $errors->has('telefono') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Teléfono">
        @error('telefono')
        <span class="text-red-500 text-xs italic">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <button wire:click="store()" class="px-3 py-2 bg-gray-200 text-gray-500 hover:bg-gray-700 hover:text-white-100 rounded">Agregar</button>
    </div>
    <div class="pt-5">

    </div>
</div>


