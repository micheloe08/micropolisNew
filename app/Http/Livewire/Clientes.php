<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Clientes as Cliente;
use App\Models\Titulo;

class Clientes extends Component
{
    public $data, $titulos, $descripcion, $clave_interna, $nombre, $estado, $ciudad, $rfc, $direccion_cliente, $email, $telefono, $titulo_id, $selected_id;
    public $updateMode = false;

    public function render()
    {
        $this->titulos = Titulo::all();
        $this->data = Cliente::with('titulo')->get();
        return view('livewire.Clientes.clientes');
    }

    private function resetInput()
    {
        $this->descripcion = null;
        $this->clave_interna = null;
        $this->nombre = null;
        $this->estado = null;
        $this->ciudad = null;
        $this->rfc = null;
        $this->direccion_cliente = null;
        $this->email = null;
        $this->telefono = null;
        $this->titulo_id = null;
    }

    public function store()
    {
        $this->validate([
            'clave_interna' => 'required|min:2',
            'nombre' => 'required|min:2'
        ]);
        Cliente::create([
            'clave_interna' => $this->clave_interna,
            'nombre' => $this->nombre,
            'rfc' => $this->rfc,
            'direccion_cliente' => $this->direccion_cliente,
            'estado' => $this->estado,
            'ciudad' => $this->ciudad,
            'email' => $this->email,
            'telefono' => $this->telefono,
            'titulo_id' => $this->titulo_id
        ]);

        $this->resetInput();
    }

    public function edit($id)
    {
        $record = Cliente::findOrFail($id);

        $this->selected_id = $id;
        $this->clave_interna = $record->clave_interna;
        $this->nombre = $record->nombre;
        $this->rfc = $record->rfc;
        $this->direccion_cliente = $record->direccion_cliente;
        $this->estado = $record->estado;
        $this->ciudad = $record->ciudad;
        $this->email = $record->email;
        $this->telefono = $record->telefono;
        $this->titulo_id = $record->titulo_id;

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
            'clave_interna' => $this->clave_interna,
            'nombre' => $this->nombre,
            'rfc' => $this->rfc,
            'direccion_cliente' => $this->direccion_cliente,
            'estado' => $this->estado,
            'ciudad' => $this->ciudad,
            'email' => $this->email,
            'telefono' => $this->telefono,
            'titulo_id' => $this->titulo_id
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
