<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Opciones as Opcion;
use App\Models\Categorias;

class Opciones extends Component
{
    public $data, $categorias, $categoria_id, $descripcion, $costo, $selected_id;
    public $updateMode = false;

    public function render()
    {
        $this->categorias = Categorias::all();
        $this->data = Opcion::with('categorias')->get();
        return view('livewire.Opciones.opciones');
    }

    public function resetInput()
    {
        $this->categoria_id = null;
        $this->descripcion = null;
        $this->costo = null;
    }

    public function store()
    {
        $this->validate([
            'categoria_id' => 'required',
            'descripcion' => 'required',
            'costo' => 'required'
        ]);

        Opcion::create([
            'categoria_id' => $this->categoria_id,
            'descripcion' => $this->descripcion,
            'costo' => $this->costo
        ]);

        $this->resetInput();
    }

    public function edit($id)
    {
        $record = Opcion::findOrFail($id);

        $this->selected_id = $id;
        $this->categoria_id = $record->categoria_id;
        $this->descripcion = $record->descripcion;
        $this->costo = $record->costo;

        $this->updateMode = true;
    }
}
