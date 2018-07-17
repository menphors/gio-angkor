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
            $table->text('pro_name')->nullable();
            $table->text('pro_code')->nullable();
            $table->string('model',200)->nullable();
            $table->text('product_desc')->nullable();
            $table->string('made',50)->nullable();
            $table->double('prices',10)->nullable();
            $table->string('count_product',150)->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('brand_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('promotion_id')->nullable();
            $table->integer('setting_id')->nullable();
            $table->integer('type_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('product_has_gallery_id',11)->nullable();
            $table->string('published',20)->nullable();
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
