<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriaProducto extends Model
{

    protected $table = 'categoria_producto';

    protected $fillable = ['descripcion', 'clave_categoria'];

    public function productos()
    {
        return $this->hasMany(Productos::class);
    }

}
