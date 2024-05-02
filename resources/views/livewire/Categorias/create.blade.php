

<div class="grid gap-6 mb-6 md:grid-cols-2">
    <div>
        <label for="clave" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Clave Categoria</label>
        <input type="text" id="clave" wire:model.defer="clave" class="{{ $errors->has('clave') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Descripcion breve">
        @error('clave')
        <span class="text-red-500 text-xs italic">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="descripcion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
        <input type="text" id="descripcion" wire:model.defer="descripcion" class="{{ $errors->has('descripcion') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Descripcion breve">
        @error('descripcion')
        <span class="text-red-500 text-xs italic">{{ $message }}</span>
        @enderror
    </div>
</div>
<div>
    <button wire:click="store()" class="px-3 py-2 bg-gray-200 text-gray-500 hover:bg-gray-700 hover:text-white-100 rounded">Agregar</button>
</div>
<div class="pt-5">

</div>

