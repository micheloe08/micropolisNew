<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $guarded = [];

    public function titulo()
    {
        return $this->belongsTo(Titulo::class);
    }

}
