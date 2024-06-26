<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Clientes as Cliente;

class Clientes extends Component
{
    public $data, $nombre, $correo, $telefono, $selected_id;
    public $updateMode = false;

    public function render()
    {
        $this->data = Cliente::all();
        return view('livewire.Clientes.clientes');
    }

    private function resetInput()
    {
        $this->nombre = null;
        $this->correo = null;
        $this->telefono = null;
    }

    public function store()
    {
        $this->validate([
            'nombre' => 'required|min:2'
        ]);
        Cliente::create([
            'nombre' => $this->nombre,
            'correo' => $this->correo,
            'telefono' => $this->telefono,
        ]);

        $this->resetInput();
    }

    public function edit($id)
    {
        $record = Cliente::findOrFail($id);

        $this->selected_id = $id;
        $this->nombre = $record->nombre;
        $this->correo = $record->correo;
        $this->telefono = $record->telefono;

        $this->updateMode = true;

    }

    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric'
        ]);

        if ($this->selected_id)
        {
            $record = Cliente::find($this->selected_id);
            $record->update([
            'nombre' => $this->nombre,
            'correo' => $this->correo,
            'telefono' => $this->telefono,
            ]);

            $this->resetInput();
            $this->updateMode = false;
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Cliente::where('id', $id);
            $record->delete();
        }
    }
}
