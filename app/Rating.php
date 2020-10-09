<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
 
	protected $table='td_rating';
    protected $primaryKey='id';
    protected $guarded=[];
    protected $fillable =[];
}


