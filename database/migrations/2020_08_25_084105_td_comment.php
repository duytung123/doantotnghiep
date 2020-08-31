<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TdComment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('td_comment', function (Blueprint $table) {
            $table->increments('cm_id');
            $table->string('cm_name');
            $table->string('cm_email');
            $table->string('cm_content');
            $table->integer('cm_product')->unsigned();
            $table->foreign('cm_product')
                    ->references('prod_id')
                    ->on('td_product')
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
        //
    }
}
