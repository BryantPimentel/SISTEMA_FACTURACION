<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BodegaModel extends Model
{
    function getBodega(){
        $result = DB::table('bodega')
            ->selectRaw('bodega.*')
            ->get();
        return $result;
    }

    function getBodegaId($id){
        $result = DB::table('bodega')
            ->selectRaw('bodega.*')
            ->where('bodega.id','=',$id)       
            ->first();

        return $result;
    }

    //ingreso
    function getBodegaIndex(){

        $result = DB::table('ingreso_det')
            ->join('bodega','bodega.id','=','ingreso_det.bodega_id') 
            ->selectRaw('ingreso_det.*, bodega.nombre as bodega_name')
            ->get();
        return $result;
        
    }
}
