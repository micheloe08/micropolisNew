<div class="not-prose relative bg-slate-50 rounded-xl overflow-hidden dark:bg-slate-800/25"><div class="absolute inset-0 bg-grid-slate-100 [mask-image:linear-gradient(0deg,#fff,rgba(255,255,255,0.6))] dark:bg-grid-slate-900/25 dark:[mask-image:linear-gradient(0deg,rgba(255,255,255,0.1),rgba(255,255,255,0.5))]" style="background-position: 10px 10px;">
</div>
<div class="relative rounded-xl overflow-auto p-8"><div class="grid grid-cols-4 gap-4 font-mono text-white text-sm text-center font-bold leading-6 bg-stripes-fuchsia rounded-lg">
        <div class="p-4 rounded-lg shadow-lg bg-fuchsia-500">
            <dl class="max-w-md text-white divide-y divide-gray-200 dark:text-white dark:divide-gray-900">
                <div class="flex flex-col pt-3">
                    <dt class="mb-1 text-white font-semibold  dark:text-white">Cliente</dt>
                    <dd class="text-md font-semibold">{{$detalles[0]->cliente}}</dd>
                </div>
        </div>
        <!-- ... -->
        <div class="p-4 rounded-lg shadow-lg bg-fuchsia-500">
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-white font-semibold  dark:text-white">Paquete</dt>
                <dd class="text-md font-semibold">{{$detalles[0]->paquete}}</dd>
            </div>
        </div>
        <div class="p-4 rounded-lg shadow-lg bg-fuchsia-500">
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-white font-semibold  dark:text-white">Sucursal</dt>
                <dd class="text-md font-semibold">{{$detalles[0]->sucursal}}</dd>
            </div>

        </div>
        <div class="p-4 rounded-lg shadow-lg bg-fuchsia-500">
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-white font-semibold  dark:text-white">Fecha de Evento</dt>
                <dd class="text-md font-semibold">{{date('d-m-Y', strtotime($detalles[0]->fecha_evento))}}</dd>
            </div>

        </div>
        <div class="p-4 rounded-lg shadow-lg bg-fuchsia-500">
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-white font-semibold  dark:text-white">Hora de Evento</dt>
                <dd class="text-md font-semibold">{{$detalles[0]->hora_evento}}</dd>
            </div>
        </div>
        <div class="p-4 rounded-lg shadow-lg bg-fuchsia-500">
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-white font-semibold  dark:text-white">Numero de invitados</dt>
                <dd class="text-md font-semibold">{{$detalles[0]->invitados_adicionales}}</dd>
            </div>
        </div>
        <!-- ... -->
        <div class="p-4 rounded-lg shadow-lg bg-fuchsia-500">
            <div class="flex flex-col pt-3">
                <dt class="mb-1 font-semibold  dark:text-white">Comida Infantil</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->comida_infantil}}</dd>
            </div>
        </div>
        <div class="p-4 rounded-lg shadow-lg bg-fuchsia-500">
            <div class="flex flex-col pt-3">
                <dt class="mb-1 font-semibold  dark:text-white">Comida Adulto</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->comida_adulto ?: 'N/A'}}</dd>
            </div>

        </div>
        <div class="p-4 rounded-lg shadow-lg bg-fuchsia-500">
            <div class="flex flex-col pt-3">
                <dt class="mb-1 font-semibold  dark:text-white">Pastel</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->pastel_personalizado ?: 'N/A'}}</dd>
            </div>

        </div>
        <div class="p-4 rounded-lg shadow-lg bg-fuchsia-500">
            <div class="flex flex-col pt-3">
                <dt class="mb-1 font-semibold  dark:text-white">Piñata</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->piñata ?: 'N/A'}}</dd>
            </div>
        </div>
        <div class="p-4 rounded-lg shadow-lg bg-fuchsia-500">
            <div class="flex flex-col pt-3">
                <dt class="mb-1 font-semibold  dark:text-white">Thermos</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->thermos ?: 'N/A'}}</dd>
            </div>
        </div>



        <div class="p-4 rounded-lg shadow-lg bg-fuchsia-500">
            <div class="flex flex-col pt-3">
                <dt class="mb-1 font-semibold  dark:text-white">CandyBar</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->candybar ?: 'N/A'}}</dd>
            </div>
        </div>
        <div class="p-4 rounded-lg shadow-lg bg-fuchsia-500">
            <div class="flex flex-col pt-3">
                <dt class="mb-1 font-semibold  dark:text-white">Manteles de Tela</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->manteles_tela ?: 'N/A'}}</dd>
            </div>

        </div>
        <div class="p-4 rounded-lg shadow-lg bg-fuchsia-500">
            <div class="flex flex-col pt-3">
                <dt class="mb-1 font-semibold  dark:text-white">Manteles de Papel</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->manteles_papel ?: 'N/A'}}</dd>
            </div>

        </div>
        <div class="p-4 rounded-lg shadow-lg bg-fuchsia-500">
            <div class="flex flex-col pt-3">
                <dt class="mb-1 font-semibold  dark:text-white">Centros de Mesa</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->centros_mesa ?: 'N/A'}}</dd>
            </div>
        </div>
        <div class="p-4 rounded-lg shadow-lg bg-fuchsia-500">
            <div class="flex flex-col pt-3">
                <dt class="mb-1 font-semibold  dark:text-white">Snacks Personalizados</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->snacks_personalizados ?: 'N/A'}}</dd>
            </div>
        </div>




        <div class="p-4 rounded-lg shadow-lg bg-fuchsia-500">
            <div class="flex flex-col pt-3">
               <dt class="mb-1 font-semibold  dark:text-white">Area Teens</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->area_teens ?: 'No'}}</dd>
            </div>

        </div>
        <div class="p-4 rounded-lg shadow-lg bg-fuchsia-500">
            <div class="flex flex-col pt-3">
                <dt class="mb-1 font-semibold  dark:text-white">Comprobante Anticipo</dt>
                <dd class="text-lg font-semibold">
                @if ($detalles[0]->comprobante_anticipo)
                    <img src="{{$detalles[0]->comprobante_anticipo}}" class="w-1/6">
                @else
                    Sin Anticipo
                @endif
                </dd>
            </div>

        </div>
        <div class="p-4 rounded-lg shadow-lg bg-fuchsia-500">
            <div class="flex flex-col pt-3">
                <dt class="mb-1 font-semibold  dark:text-white">Reservacion Pagada</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->pagado ?: 'No'}}</dd>
            </div>
        </div>
        <div class="p-4 rounded-lg shadow-lg bg-fuchsia-500">
            <div class="flex flex-col pt-3">
                <dt class="mb-1 font-semibold  dark:text-white">Comentarios</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->comentarios ?: 'N/A'}}</dd>
            </div>
        </div>
    </div>
</div>
<div class="absolute inset-0 pointer-events-none border border-black/5 rounded-xl dark:border-white/5"></div></div>
