<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
 
	protected $table='td_order';
    protected $primaryKey='id';
    protected $guarded=[];
}


