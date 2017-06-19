<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    protected $table='paper';
    protected $primaryKey ='paper_id';
    public $timestamps = false;

}
