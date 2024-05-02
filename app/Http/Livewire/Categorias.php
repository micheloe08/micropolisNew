<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categorias as CategoriaProducto;

class Categorias extends Component
{

    public $data, $descripcion, $selected_id, $clave;
    public $updateMode = false;

    public function render()
    {
        $this->data = CategoriaProducto::all();
        return view('livewire.Categorias.categorias');
    }

    private function resetInput()
    {
        $this->descripcion = null;
        $this->clave = null;
    }

    public function store()
    {
        $this->validate([
            'clave' => 'required|min:2',
            'descripcion' => 'required|min:2'
        ]);
        CategoriaProducto::create([
            'clave' => $this->clave,
            'descripcion' => $this->descripcion
        ]);

        $this->resetInput();
    }

    public function edit($id)
    {
        $record = CategoriaProducto::findOrFail($id);

        $this->selected_id = $id;
        $this->descripcion = $record->descripcion;
        $this->clave = $record->clave_categoria;

        $this->updateMode = true;

    }

    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'clave' => 'required|min:2',
            'descripcion' => 'required|min:2'
        ]);

        if ($this->selected_id)
        {
            $record = CategoriaProducto::find($this->selected_id);
            $record->update([
                'clave' => $this->clave_categoria,
                'descripcion' => $this->descripcion
            ]);

            $this->resetInput();
            $this->updateMode = false;
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = CategoriaProducto::where('id', $id);
            $record->delete();
        }
    }
}
