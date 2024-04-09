<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CategoriaProducto;

class Categorias extends Component
{

    public $data, $descripcion, $selected_id, $clave_categoria;
    public $updateMode = false;

    public function render()
    {
        $this->data = CategoriaProducto::all();
        return view('livewire.Categorias.categorias');
    }

    private function resetInput()
    {
        $this->descripcion = null;
        $this->clave_categoria = null;
    }

    public function store()
    {
        $this->validate([
            'clave_categoria' => 'required|min:2',
            'descripcion' => 'required|min:2'
        ]);
        CategoriaProducto::create([
            'clave_categoria' => $this->clave_categoria,
            'descripcion' => $this->descripcion
        ]);

        $this->resetInput();
    }

    public function edit($id)
    {
        $record = CategoriaProducto::findOrFail($id);

        $this->selected_id = $id;
        $this->descripcion = $record->descripcion;
        $this->clave_categoria = $record->clave_categoria;

        $this->updateMode = true;

    }

    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'clave_categoria' => 'required|min:2',
            'descripcion' => 'required|min:2'
        ]);

        if ($this->selected_id)
        {
            $record = CategoriaProducto::find($this->selected_id);
            $record->update([
                'clave_categoria' => $this->clave_categoria,
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
