<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sucursal';

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
    protected $fillable = ['id_empresa', 'nombre_empresa', 'nombre', 'sta', 'porc_iva', 'razon_social', 'direccion', 'telefono', 'nit', 'scafi_bod', 'validanit', 'logo', 'fechai', 'fechaf'];

    
}
