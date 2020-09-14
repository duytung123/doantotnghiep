<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TdUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('td_user', function (Blueprint $table) {
                $table->increments('id');
                $table->string('email')->unique();
                $table->string('password');
                $table->tinyInteger('level');
                $table->integer('phone')->nullable();
                $table->string('avatar')->nullable();
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
            Schema::dropIfExists('td_user');
    }
}
