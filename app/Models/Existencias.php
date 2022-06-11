<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Existencias extends Model
{
    
  
   
    function sucursal(){
        $data = DB::table('sucursal') 
        ->select('sucursal.*')
        ->where('nombre.sucursal', '=', nombre);
        return $data;
    }
    


}


