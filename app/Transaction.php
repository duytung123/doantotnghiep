<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Transaction extends Model
{
	const STATUS_PRIVATE = 0;
	const STATUS_PUBLIC = 1;
	protected $status =
	[
			1 =>
		[
			'name' => 'Chưa xử lý',
			'class' => 'bg-danger'
		],
			0 =>
		[
			'name' => 'Đã xử lý',
			'class' => 'bg-info'
		]

	];
	
	public function getStatus(){
		return Arr::get($this->status,$this->tr_status,['name'=>'Desk']);
	}
 
	protected $table='td_transaction';
    protected $primaryKey='id';
    protected $fillable = [];
    protected $guarded=[];

}


