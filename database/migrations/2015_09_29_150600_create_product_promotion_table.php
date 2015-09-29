<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPromotionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_promotion', function(Blueprint $table) {

            $table->increments('id');
            $table->integer('product_id')->unsigned()->unique();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->integer('promotion_id')->unsigned()->unique();
            $table->foreign('promotion_id')->references('id')->on('promotions')->onDelete('cascade');

            $table->boolean('isActive');

            $table->timestamp('starting_date');
            $table->timestamp('end_date');
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
        Schema::drop('product_promotion');
    }
}
