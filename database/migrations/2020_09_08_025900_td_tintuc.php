<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TdTintuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('td_tintuc', function (Blueprint $table) {
         $table->increments('id');
         $table->string('n_title');
         $table->string('n_contentslug')->nullable();
         $table->longText('n_content');
         $table->string('n_description');
         $table->string('n_author')->nullable();
         $table->string('n_img'); 
         $table->string('n_featured')->nullable();
         $table->integer('n_view')->nullable();
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
      Schema::dropIfExists('td_tintuc');
  }
}
