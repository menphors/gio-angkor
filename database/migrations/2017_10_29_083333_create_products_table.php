<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_products', function (Blueprint $table) {
            $table->increments('id');
            $table->text('pro_name');
            $table->text('pro_code');
            $table->string('model',200);
            $table->text('product_desc');
            $table->string('made',50);
            $table->double('prices',10);
            $table->string('count_product',150);
            $table->integer('quantity')->unsigned();
            $table->integer('brand_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('promotion_id')->unsigned();
            $table->integer('setting_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('product_has_gallery_id',11);
            $table->string('published',20);
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
        Schema::dropIfExists('tbl_products');
    }
}
