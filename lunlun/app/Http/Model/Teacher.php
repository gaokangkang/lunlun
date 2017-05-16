<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
     protected $table='teacher';
     protected $primaryKey ='teacher_id';
     public $timestamps = false;

}
