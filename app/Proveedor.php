<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'proveedor';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sucursal_id', 'codigo', 'nombre', 'nombre_facturar', 'direccion', 'telefono', 'nit', 'email', 'referencia_id', 'dias_credito', 'limite_credito', 'direccion2', 'departamento', 'municipio'];

    
}
