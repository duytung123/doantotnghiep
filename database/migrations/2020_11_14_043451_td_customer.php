<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TdCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('td_customer', function (Blueprint $table) {
                $table->increments('id');
                $table->string('email')->unique();
                $table->string('name')->nullable();
                $table->string('password');
                $table->tinyInteger('level')->nullable();      
                $table->integer('phone')->nullable();
                $table->string('avatar')->nullable();
                $table->integer('total_pay')->nullable();
                $table->string('address')->nullable();
                $table->string('aboute')->nullable();
                $table->rememberToken();
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
