<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProveedorModel extends Model
{
    function getProveedor(){
        $result = DB::table('proveedor')
            ->selectRaw('proveedor.*')
            ->get();
        return $result;
    }

    function getProveedorId($id){
        $result = DB::table('proveedor')
            ->selectRaw('proveedor.*')
            ->where('proveedor.id','=',$id)       
            ->first();
        return $result;
    }

    //Ingreso
    function getProveedorIndex(){

        $result = DB::table('ingreso_cab')
            ->join('proveedor','proveedor.id','=','ingreso_cab.proveedor_id') 
            ->selectRaw('ingreso_cab.*, proveedor.nombre as proveedor_name')
            ->get();
        return $result;
        
    }

}
