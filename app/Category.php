<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
 
	protected $table='td_category';
    protected $primaryKey='cate_id';
    protected $guarded=[];
}


