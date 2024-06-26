<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursales extends Model
{
    protected $table = 'sucursales';

    protected $guarded = [];

    public function paquetes()
    {
        return $this->belongsTo(Paquetes::class);
    }
}
