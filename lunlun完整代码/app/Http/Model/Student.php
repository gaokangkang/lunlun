<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table='student';
    protected $primaryKey ='student_id';
    public $timestamps = false;

}
