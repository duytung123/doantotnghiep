<?php

use Illuminate\Database\Seeder;

class Userseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
    	$data=
    	[
    		[
    			'email'=>'admin@gmail.com',
    			'password'=>bcrypt('123456'),
    			'level'=>1
    		],
    		[
    			'email'=>'duytung123@gmail.com',
    			'password'=>bcrypt('123456'),
    			'level'=>0
    		],
    	];
    	DB::table('td_user')->insert($data);
    }
}
