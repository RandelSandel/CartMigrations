<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActiveCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('active_carts', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('activated');
            $table->integer('cart_id')->unsigned();
            $table->timestamps();


            $table->foreign('cart_id')
                    ->references('id')
                    ->on('carts')
                    ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('active_carts');
    }
}
