<x-perfect-scrollbar as="nav" aria-label="main" class="flex flex-col flex-1 gap-4 px-3">

    <x-sidebar.link title="Micropolis Culiacán" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')">
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.dropdown title="Catalogo Sucursales" :active="Str::startsWith(request()->route()->uri(), 'sucursales')">
        <x-slot name="icon">
            <x-heroicon-o-user class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
            <x-sidebar.sublink title="Sucursales" href="{{ route('sucursales') }}"
            :active="request()->routeIs('sucursales')" />
    </x-sidebar.dropdown>

    <x-sidebar.dropdown title="Catalogo Clientes" :active="Str::startsWith(request()->route()->uri(), 'reservaciones')">
        <x-slot name="icon">
            <x-heroicon-o-user class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
            <x-sidebar.sublink title="Clientes" href="{{ route('clientes') }}"
            :active="request()->routeIs('clientes')" />
            <x-sidebar.sublink title="Reservaciones" href="{{ route('reservaciones') }}"
            :active="request()->routeIs('reservaciones')" />
    </x-sidebar.dropdown>

    <x-sidebar.dropdown title="Catalogo Paquetes" :active="Str::startsWith(request()->route()->uri(), 'paquetes')">
        <x-slot name="icon">
            <x-carbon-product class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
            <x-sidebar.sublink title="Categorias" href="{{ route('categorias') }}"
                :active="request()->routeIs('categorias')" />
            <x-sidebar.sublink title="Paquetes" href="{{ route('paquetes') }}"
                :active="request()->routeIs('paquetes')" />
            <x-sidebar.sublink title="Opciones" href="{{ route('opciones') }}"
                :active="request()->routeIs('opciones')" />
            <x-sidebar.sublink title="Opciones de Paquetes" href="{{ route('paqueteOpciones') }}"
                :active="request()->routeIs('paqueteOpciones')" />
    </x-sidebar.dropdown>

    <x-sidebar.dropdown title="Empleados" :active="Str::startsWith(request()->route()->uri(), 'empleados')" :isActive="request()->routeIs('empleados')">
        <x-slot name="icon">
            <x-carbon-product class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
            <x-sidebar.sublink title="Empleados" href="{{ route('empleados') }}"
                :active="request()->routeIs('empleados')" />
            <x-sidebar.sublink title="Puestos" href="{{ route('labores') }}"
                :active="request()->routeIs('labores')" />
    </x-sidebar.dropdown>



    {{-- Examples --}}

    {{-- <x-sidebar.link title="Dashboard" href="{{ route('dashboard') }}" :isActive="request()->routeIs('dashboard')" /> --}}

    {{-- <x-sidebar.dropdown title="Buttons" :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink title="Text button" href="{{ route('buttons.text') }}"
            :active="request()->routeIs('buttons.text')" />
        <x-sidebar.sublink title="Icon button" href="{{ route('buttons.icon') }}"
            :active="request()->routeIs('buttons.icon')" />
        <x-sidebar.sublink title="Text with icon" href="{{ route('buttons.text-icon') }}"
            :active="request()->routeIs('buttons.text-icon')" />
    </x-sidebar.dropdown> --}}

</x-perfect-scrollbar>
