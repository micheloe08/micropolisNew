<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Paquetes as Paquete;
use App\Models\Sucursales;

class Paquetes extends Component
{
    public $paquetes, $sucursales, $descripcion, $precio_base, $sucursal_id;
    public $updateMode = false;

    public function render()
    {
        $this->sucursales = Sucursales::all();
        $this->paquetes = Paquete::with('sucursales')->get();
        return view('livewire.Paquetes.index');
    }

    public function resetInput()
    {
        $this->descripcion = null;
        $this->precio_base = null;
        $this->sucursal_id = null;
    }

    public function store()
    {
        $this->validate([
            'descripcion' => 'required',
            'precio_base' => 'required',
            'sucursal_id' => 'required'
        ]);

        Paquete::create([
            'descripcion' => $this->descripcion,
            'precio_base' => $this->precio_base,
            'sucursal_id' => $this->sucursal_id
        ]);

        $this->resetInput();
    }
}
