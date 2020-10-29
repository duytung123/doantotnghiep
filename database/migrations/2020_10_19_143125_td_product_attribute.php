<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TdProductAttribute extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('td_product_attribute', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('product_attribute_id');
        $table->string('screen')->nullable();
        $table->string('operating system')->nullable();
        $table->string('front camera')->nullable();
        $table->string('rear camera')->nullable();
        $table->string('cpu')->nullable();
        $table->string('ram')->nullable();
        $table->string('internal memory')->nullable();
        $table->string('memory card')->nullable();
        $table->string('sim')->nullable();
        $table->string('hard disk')->nullable();
        $table->string('card screen')->nullable();
        $table->string('connection Gate')->nullable();
        $table->string('design')->nullable();
        $table->string('dimensions')->nullable();

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
