<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Contact extends Model
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
	
	public function getStatusContact(){
		return Arr::get($this->status,$this->ct_status,['name'=>'Desk']);
	}
    protected $table='td_contact';
    protected $primaryKey='id';
    protected $guarded=[];
}
