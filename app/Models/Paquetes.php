<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquetes extends Model
{
    protected $table = 'paquetes';

    protected $guarded = [];

    public function sucursales()
    {
        return $this->belongsTo(Sucursales::class, 'sucursal_id', 'id');
    }
}
