<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('m_users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('email')->unique();
                $table->string('name')->nullable();
                $table->string('password');
                $table->tinyInteger('level')->nullable();      
                $table->integer('phone')->nullable();
                $table->string('avatar')->nullable();
                $table->integer('total_pay')->nullable();
                $table->string('address')->nullable();
                $table->string('about')->nullable();
                $table->integer('code')->nullable();
                $table->timestamps('time_code')->nullable();
                $table->varchar('code_active')->nullable();
                $table->timestamps('time_active')->nullable();
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
