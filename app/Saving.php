<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Saving extends Model
{
	use SoftDeletes;
    protected $table='savings';
    protected $primarykey ='sav_id';
    protected $dates = ['deleted_at'];
    protected $guarded=[];
      
  
}

