<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleTranInv extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'detalle_tran_inv';

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
    protected $fillable = ['sucursal_id', 'egreso_cab_id', 'egreso_dev_cab_id',
    'ingreso_cab_id', 'ingreso_dev_cab_id', 'producto_id','debeu', 'haberu', 'debev',
    'haberv', 'bodega_id', 'traslado_cab_id','fecha', 'debec', 'centro_id',
    'gasto_id', 'requis_cab_id', 'debeca','haberva', 'moneda_id', 'tipo_cambio',
    'transfer_cab_id', 'costoprom', 'saldou','saldov'];
}