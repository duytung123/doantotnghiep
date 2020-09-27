<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TdRating extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('td_rating', function (Blueprint $table) {
         $table->increments('id');
         $table->integer('r_product_id');
         $table->tinyinteger('r_number')->nullable();
         $table->string('r_user_id')->nullable();
         $table->longText('r_content');
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
