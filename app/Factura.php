<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'exit_data';

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
    protected $fillable = ['num_fac', 'proveedor', 'imei'];

    
}
