<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opciones extends Model
{
    protected $table = 'opciones';

    protected $guarded = [];

    public function categorias()
    {
        return $this->belongsTo(Categorias::class, 'categoria_id', 'id');
    }
}
