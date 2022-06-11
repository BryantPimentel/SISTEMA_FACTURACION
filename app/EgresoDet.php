<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EgresoDet extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'egreso_det';

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
    protected $fillable = ['sucursal_id', 'egreso_cab_id','producto_id','descrip',
    'cantidad','precio','importe','bodega_id','porc_desc','descuento','centro_id',
    'id_idp','idp_value','gasto_id','descrip_ampliada','importe','precio','descuentoa','porc_impuesto'];
}
