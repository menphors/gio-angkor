<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_shipping', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('shipping_to',150);
            $table->text('shipping_name');
            $table->date('shipping_date');
            $table->text('shipping_address');
            $table->string('shipping_city',150);
            $table->string('shipping_region',150);
            $table->string('shipping_postal_code',10);
            $table->string('shipping_country',150);
            $table->integer('order_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('published',5);
            $table->double('shipping_price',10);
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

            Schema::dropIfExists('tbl_shipping');

    }
}
