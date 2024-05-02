<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Empleados as Empleado;

class Empleados extends Component
{
    public $data, $nombre, $telefono, $correo, $selected_id;
    public $updateMode = false;

    public function render()
    {
        $this->data = Empleado::all();
        return view('livewire.Empleados.empleados');
    }

    public function resetInput()
    {
        $this->nombre = null;
        $this->telefono = null;
        $this->correo = null;

        $this->render();
    }

    public function store()
    {
        $this->validate([
            'nombre' => 'required',
            'telefono' => 'required'
        ]);

        Empleado::create([
            'nombre' => $this->nombre,
            'telefono' => $this->telefono,
            'correo' => $this->correo ? : ''
        ]);

        $this->resetInput();
    }

    public function edit($id)
    {
        $record = Empleado::findOrFail($id);
        $this->selected_id = $id;
        $this->nombre = $record->nombre;
        $this->correo = $record->correo;
        $this->telefono = $record->telefono;

        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'selected_id' => 'required'
        ]);

        if ($this->selected_id)
        {
            $record = Empleado::find($this->selected_id);
            $record->update([
                'nombre' => $this->nombre,
                'telefono' => $this->telefono,
                'correo' => $this->correo ? : ''
            ]);

            $this->resetInput();
            $this->updateMode = false;

        }
    }
}
