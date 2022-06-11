<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EgresoCab extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'egreso_cab';

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
    protected $fillable = ['sucursal_id','usuario_id','cliente_id','vendedor_id','documento_id',
    'nit','nombre','direccion','fecha','dias_credito','numero','subtotal','iva','total','fyh',
    'ip','formapago','porc_desc','descuento','sta','observ','exportacion','gravada','mercaderia',
    'servicio','exenta','ref_tabla','ref_id','fecha_tran','partida','poliza','referencia',
    'erp_cuenta_id','modulo_id','firma','respuesta','moneda_id','tipo_cambio','totala','descuentoa',
    'impuesto','lat','lng'];
}
