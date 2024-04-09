
        <input type="hidden" wire:model="selected_id">
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="clave_interna" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Clave Interna</label>
                <input type="text" id="clave_interna" wire:model="clave_interna" class="{{ $errors->has('clave_interna') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="01504">
                @error('clave_interna')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="titulo_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione Un Titulo</label>
                <select id="titulo_id" wire:model="titulo_id" class="{{ $errors->has('titulo_id') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Seleccione Un Titulo</option>
                    @foreach ($titulos as $titulo)
                        <option value={{ $titulo->id }}> {{ $titulo->descripcion }} </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre(s)</label>
                <input type="text" id="nombre" wire:model="nombre" class="{{ $errors->has('nombre') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Michel">
                @error('nombre')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="direccion_cliente" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dirección</label>
                <input type="text" id="direccion_cliente" wire:model="direccion_cliente" class="{{ $errors->has('direccion_cliente') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Calle cuarta">
                @error('direccion_cliente')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="estado" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estado</label>
                <input type="text" id="estado" wire:model="estado" class="{{ $errors->has('estado') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Sinaloa">
                @error('estado')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="ciudad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ciudad</label>
                <input type="text" id="ciudad" wire:model="ciudad" class="{{ $errors->has('ciudad') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Culiacán">
                @error('ciudad')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="text" id="email" wire:model="email" class="{{ $errors->has('email') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="jyo_0509@hotmail.com">
                @error('email')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="telefono" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Teléfono</label>
                <input type="text" id="telefono" wire:model="telefono" class="{{ $errors->has('telefono') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="6677519117">
                @error('telefono')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="rfc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">RFC</label>
                <input type="text" id="rfc" wire:model="rfc" class="{{ $errors->has('rfc') ? ' border-red-500' : 'border-gray-200' }} bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="6677519117">
                @error('rfc')
                <span class="text-red-500 text-xs italic">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="w-auto pl-4 text-right">
            <button wire:click="update()" class="px-3 py-2 bg-orange-200 text-orange-500 hover:bg-orange-500 hover:text-orange-100 rounded">Actualizar</button>
        </div>
        <div class="pt-5">

        </div>
