<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Reservaciones as Reservacion;

class Reservaciones extends Component
{
    public $data, $detalles;
    public $mostrarDetalles = false;

    public function render()
    {
        $this->data = DB::select('select pa.descripcion as nombre_paquete, su.nombre as sucursal, cl.nombre as cliente, re.id, re.fecha_evento, re.hora_evento
        from reservaciones re
        inner join paquetes pa on re.paquete_id = pa.id
        inner join sucursales su on pa.sucursal_id = su.id
        inner join clientes cl on re.cliente_id = cl.id');
        if ($this->mostrarDetalles) {
            return view('livewire.Reservaciones.detalleReservaciones');
        } else {
            return view('livewire.Reservaciones.reservaciones');
        }
    }

    public function show($id)
    {
        $this->detalles = DB::select('select paquetes.descripcion as paquete, su.nombre as sucursal, users.name as usuario, cli.nombre as cliente, pa.fecha_evento, pa.hora_evento, pa.comida, pa.pastel_personalizado, pa.piñata, pa.thermos, pa.candybar, pa.manteles_tela, pa.manteles_papel, pa.centros_mesa, pa.snacks_personalizados, pa.invitados
        from reservaciones pa
        inner join paquetes on pa.paquete_id = paquetes.id inner join sucursales su on pa.sucursal_id = su.id
        inner join users on pa.user_id = users.id
        inner join clientes cli on pa.cliente_id = cli.id
        where pa.id = :id', ['id' => $id]);
        $this->mostrarDetalles = true;
    }
}
