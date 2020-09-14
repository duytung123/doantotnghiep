<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TdOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('td_order', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('or_transaction_id');
           $table->integer('or_product_id');
           $table->tinyInteger('or_qty'); 
           $table->integer('or_price')->nullable();
           $table->tinyInteger('or_sell')->nullable();
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
         Schema::dropIfExists('td_order');
    }
}
