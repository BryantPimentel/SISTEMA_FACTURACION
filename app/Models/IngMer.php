<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class IngMer extends Model
{
    
    function getIngresoDet($id){
        $data = DB::table('ingreso_det') 
        ->select('ingreso_det.*')
        ->where('ingreso_det.ingreso_cab_id', '=', $id);
        return $data;
    }

    function getIngresoDetEdit($id){
        $data = DB::table('ingreso_det') 
        ->select('ingreso_det.*')
        ->where('ingreso_det.ingreso_cab_id', '=', $id)
        ->get();
       
        return $data;
    }

    function getIngresoDetInvEdit($id){
        $data = DB::table('detalle_tran_inv') 
        ->select('detalle_tran_inv.*')
        ->where('detalle_tran_inv.ingreso_cab_id', '=', $id);
        return $data;
    }

    function getIngresoDett($id){
        $data = DB::table('ingreso_det') 
        ->select('ingreso_det.*')
        ->where('ingreso_det.ingreso_cab_id', '=', $id)
        ->first();
        return $data;
    }

    function getIngresoDetDestroyImei($id){
        $data = DB::table('ingreso_det') 
        ->select('ingreso_det.*')
        ->where('ingreso_det.ingreso_cab_id', '=', $id)
        ->get();
        
        return $data;
    }


}


