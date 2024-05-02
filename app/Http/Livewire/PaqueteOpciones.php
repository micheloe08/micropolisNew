<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class PaqueteOpciones extends Component
{
    public $data;

    public function render()
    {
        $this->data = DB::select('select pa.id as id, pa.descripcion as nombre_paquete, op.descripcion as opcion, categorias.descripcion as categoria, paquete_opciones.created_at as Fecha FROM paquete_opciones inner join opciones op on paquete_opciones.opcion_id = op.id inner join paquetes pa on paquete_opciones.paquete_id = pa.id inner join categorias on op.categoria_id = categorias.id');
        return view('livewire.PaqueteOpciones.paquete-opciones');
    }
}
