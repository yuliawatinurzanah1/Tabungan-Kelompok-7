<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Saving_usage extends Model
{
    use SoftDeletes;
    protected $table='saving_usages';
    protected $primarykey ='usa_id';
    protected $dates = ['deleted_at'];
    protected $guarded=[];
}
