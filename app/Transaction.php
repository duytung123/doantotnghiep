<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
	const status_done =1;
	const status_default =0;
 	
	protected $table='td_transaction';
    protected $primaryKey='id';
    protected $fillable = [];
    protected $guarded=[];
}


