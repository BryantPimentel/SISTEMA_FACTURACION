<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IngresoDet extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ingreso_det';

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
    protected $fillable = ['sucursal_id','producto_id','ingreso_cab_id',
    'descrip','cantidad','importe','bodega_id','centro_id','porc_desc',
    'descuento','id_idp','idp_value','gasto_id','descrip_ampliada'];

    
}
