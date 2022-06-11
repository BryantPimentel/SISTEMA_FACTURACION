<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Csv extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'csv_data';

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
    protected $fillable = ['csv_filename', 'csv_header', 'csv_data'];

    
}
