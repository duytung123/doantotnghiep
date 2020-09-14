<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TdProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('td_product', function (Blueprint $table) {
        $table->increments('prod_id');
        $table->string('prod_name');
        $table->integer('prod_price');
        $table->string('prod_warranty');
        $table->text('prod_description');
        $table->string('prod_img');
        $table->string('prod_slug');
        $table->string('prod_condition');
        $table->tinyInteger('prod_status');
        $table->string('prod_manufacturing');
        $table->string('prod_promotion');
        $table->tinyInteger('prod_featured');
        $table->integer('prod_cate')->unsigned();
        $table->integer('prod_cateall')->unsigned();
        $table->foreign('prod_cateall')
            ->references('cateall_id')
            ->on('td_cateallproduct')
            ->onDelete('cascade');  
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
       Schema::dropIfExists('td_product');
   }
}
