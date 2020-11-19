<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table='td_tinhthanhpho';
    protected $primaryKey='matp';
    protected $guarded=[];
}
