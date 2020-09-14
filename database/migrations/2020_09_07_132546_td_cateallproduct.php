<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TdCateallproduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('td_cateallproduct', function (Blueprint $table) {
            $table->increments('cateall_id');
            $table->string('cateall_name');
            $table->string('cateall_slug');
            $table->integer('cateall_product')->unsigned();
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
         Schema::dropIfExists('td_cateallproduct');
    }
}
