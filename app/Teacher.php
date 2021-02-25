<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
	use SoftDeletes;
    protected $table='teachers';
    protected $primarykey ='tcr_id';
    protected $dates = ['deleted_at'];
    protected $guarded=[];
}
