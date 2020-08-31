<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
 
	protected $table='td_transaction';
    protected $primaryKey='id';
    protected $guarded=[];
}


