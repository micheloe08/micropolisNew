<div>
    <div class="grid gap-6 mb-6 md:grid-cols-2">
        <div>
            <label for="descripcion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre de Paquete</label>
            <input type="text" id="descripcion" wire:model.defer ="descripcion" class="{{ $errors->has('descripcion') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('descripcion')
            <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="sucursal_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sucursales</label>
            <select id="sucursal_id" wire:model="sucursal_id" class="form-control {{ $errors->has('sucursal_id') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Seleccione Una</option>
                @foreach ($sucursales as $item)
                    <option value="{{ $item->id }}"> {{ $item->nombre }} </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="precio_base" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio Base</label>
            <input type="text" id="precio_base" wire:model.defer ="precio_base" class="{{ $errors->has('precio_base') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @error('precio_base')
            <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div>
        <button wire:click="store()" class="px-3 py-2 bg-gray-200 text-gray-500 hover:bg-gray-700 hover:text-white-100 rounded">Agregar</button>
    </div>
    <div class="pt-5">
        
    </div>
</div>