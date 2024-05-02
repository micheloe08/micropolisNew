<div>
    <div class="grid gap-6 mb-6 md:grid-cols-3 m-4">
        <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Cliente</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->cliente}}</dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Paquete</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->paquete}}</dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Sucursal</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->sucursal}}</dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Fecha de Evento</dt>
                <dd class="text-lg font-semibold">{{date('d-m-Y', strtotime($detalles[0]->fecha_evento))}}</dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Hora de Evento</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->hora_evento}}</dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Numero de invitados</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->invitados_adicionales}}</dd>
            </div>
        </dl>


        <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Comida Infantil</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->comida_infantil}}</dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Comida Adulto</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->comida_adulto ?: 'N/A'}}</dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Pastel</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->pastel_personalizado ?: 'N/A'}}</dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Piñata</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->piñata ?: 'N/A'}}</dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Thermos</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->thermos ?: 'N/A'}}</dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">CandyBar</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->candybar ?: 'N/A'}}</dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Manteles de Tela</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->manteles_tela ?: 'N/A'}}</dd>
            </div>
        </dl>


        <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Manteles de Papel</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->manteles_papel ?: 'N/A'}}</dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Centros de Mesa</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->centros_mesa ?: 'N/A'}}</dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Snacks Personalizados</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->snacks_personalizados ?: 'N/A'}}</dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Area Teens</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->area_teens ?: 'No'}}</dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Comprobante Anticipo</dt>
                <dd class="text-lg font-semibold">
                @if ($detalles[0]->comprobante_anticipo)
                    <img src="{{$detalles[0]->comprobante_anticipo}}" class="w-1/6">
                @else
                    Sin Anticipo
                @endif
                </dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Reservacion Pagada</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->pagado ?: 'No'}}</dd>
            </div>
            <div class="flex flex-col pt-3">
                <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Comentarios</dt>
                <dd class="text-lg font-semibold">{{$detalles[0]->comentarios ?: 'N/A'}}</dd>
            </div>
        </dl>
    </div>
</div>
