<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'product';

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
    protected $fillable = ['battery_sn', 'chargerno_a', 'color', 
    'country', 'ean_upc_code', 'imei', 'imei_1', 'item_sales', 'lotNo', 
    'mac', 'mac_1', 'mac_2', 'meid_dec', 'meid_dec_18', 'meid_hex', 'meid_hex_14', 
    'model_ex', 'packing_list_no', 'board_barcode', 'product_barcode', 'product_date', 
    'packing2', 'packing3', 'weight', 'secrettype', 'software_version', 'spu_barcode', 'wifi','stock'];

    
}
