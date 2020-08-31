<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
 
	protected $table='td_comment';
    protected $primaryKey='cm_id';
    protected $guarded=[];
}


