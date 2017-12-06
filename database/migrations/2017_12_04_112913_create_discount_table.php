<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_discount', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('discount_percentage',50);
            $table->integer('quantity',25);
            $table->integer('product_id',11);
            $table->integer('category_id',11);
            $table->integer('store_id',11);
            $table->date('date_from');
            $table->date('date_to');
            $table->string('published',5);
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

            Schema::dropIfExists('tbl_discount');

    }
}
