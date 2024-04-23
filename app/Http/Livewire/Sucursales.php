<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Sucursales as Sucursal;

class Sucursales extends Component
{
    public $sucursales, $nombre, $telefono, $selected_id;
    public $updateMode = false;

    public function render()
    {
        $this->sucursales = Sucursal::all();
        return view('livewire.sucursales.index');
    }

    public function resetInput()
    {
        $this->nombre = null;
        $this->telefono = null;
    }

    public function store()
    {
        $this->validate([
            'nombre' => 'required',
            'telefono' => 'required|min:10|max:10'
        ]);

        Sucursal::create([
            'nombre' => $this->nombre,
            'telefono' => $this->telefono
        ]);

        $this->resetInput();
    }

    public function edit($id)
    {
        $record = Sucursal::findOrFail($id);
        $this->selected_id = $id;
        $this->nombre = $record->nombre;
        $this->telefono = $record->telefono;
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric'
        ]);

        if($this->selected_id) {

            $record = Sucursal::find($this->selected_id);
            $record->update([
                'nombre' => $this->nombre,
                'telefono' => $this->telefono
            ]);

            $this->resetInput();
            $this->updateMode = false;
        }
    }

    public function destroy($id)
    {
        if($id) {
            $record = Sucursal::where('id', $id);
            $record->delete();
        }
    }
}
