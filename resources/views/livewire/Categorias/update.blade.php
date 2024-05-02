<div class="w-full">
    <div class="flex flex-wrap justify-between items-center mb-16">
        <input type="hidden" wire:model="selected_id">
        <div class="w-auto pr-4">
            <label for="clave" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Clave Categoria</label>
            <input type="text" id="clave" wire:model.defer="clave" class="{{ $errors->has('clave') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Descripcion breve">
            @error('clave')
            <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
        <div class="w-auto pr-4">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">Descripción</label>
            <input wire:model.defer="descripcion" type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('descripcion') ? ' border-red-500' : 'border-gray-200' }} rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white">
            @error('descripcion')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
            @enderror
        </div>
        <div class="w-auto pl-4 text-right">
            <button wire:click="update()" class="px-3 py-2 bg-orange-200 text-orange-500 hover:bg-orange-500 hover:text-orange-100 rounded">Agregar</button>
        </div>
    </div>
</div>
