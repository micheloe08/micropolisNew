<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Labores;

class Labor extends Component
{
    public $data;

    public function render()
    {
        $this->data = Labores::all();
        return view('livewire.labor.labor');
    }
}
