<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductInsertStockModel extends Model
{
    //Egreso stock 1 a 0
    function getStockProduct($imei){
        $data = DB::table('product') 
        ->where('imei','=',$imei)
        ->update(['stock' => 0]);
    }

    //Ingreso stock 0 a 1
    function getStockProductIng($imei){
        $data = DB::table('product') 
        ->where('imei','=',$imei)
        ->update(['stock' => 1]);
    }
}
