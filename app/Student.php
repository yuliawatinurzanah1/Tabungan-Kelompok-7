<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    protected $table='students';
    protected $primarykey ='stu_id';
    protected $dates = ['deleted_at'];
    protected $guarded=[];
}
