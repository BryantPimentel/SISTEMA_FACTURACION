<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IngresoCab extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ingreso_cab';

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
    protected $fillable = ['sucursal_id', 'usuario_id', 'proveedor_id',
    'documento_id','nit','nombre','direccion','fecha','dias_credito',
    'numero','subtotal','iva','total','fyh','ip','formapago','porc_desc',
    'descuento','sta','serie','observ','importacion','fecha_tran','partida',
    'poliza','referencia','erp_cuenta_id','modulo_id','mercaderia','servicios',
    'gravada','exento','ref_tabla','ref_id','total_idp'];
}
