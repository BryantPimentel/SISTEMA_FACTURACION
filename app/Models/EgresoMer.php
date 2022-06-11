<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EgresoMer extends Model
{
    
    function getEgresoDet($id){
        $data = DB::table('egreso_det') 
        ->select('egreso_det.*')
        ->where('egreso_det.egreso_cab_id', '=', $id);
        return $data;
    }

    function getEgresoDetEdit($id){
        $data = DB::table('egreso_det') 
        ->select('egreso_det.*')
        ->where('egreso_det.egreso_cab_id', '=', $id)
        ->get();
        return $data;
    }

    function getEgresoDetInvEdit($id){
        $data = DB::table('detalle_tran_inv') 
        ->select('detalle_tran_inv.*')
        ->where('detalle_tran_inv.egreso_cab_id', '=', $id);
        return $data;
    }

    function getIngresoDetDestroyImei($id){
        $data = DB::table('egreso_det') 
        ->select('egreso_det.*')
        ->where('egreso_det.egreso_cab_id', '=', $id)
        ->get();
        
        return $data;
    }


}


