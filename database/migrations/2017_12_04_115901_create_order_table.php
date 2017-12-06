<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_order', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->double('order_unit_price',10);
            $table->integer('quantity')->unsigned();
            $table->string('discount',255);
            $table->dateTime('order_date');
            $table->text('status_product');
            $table->string('published',5);
            $table->integer('user_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

            Schema::dropIfExists('tbl_order');      //


    }
}
