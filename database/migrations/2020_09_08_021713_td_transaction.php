<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TdTransaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('td_transaction', function (Blueprint $table) { 
            $table->increments('id'); 
            $table->string('tr_phone')->nullable();
            $table->string('tr_address')->nullable();
            $table->string('tr_note')->nullable();
            $table->integer('tr_totalprice'); 
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
         Schema::dropIfExists('td_transaction');
    }
}
