<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_promotion', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->text('promotion_name')->nullable();
            $table->string('promotion_prices',50)->nullable();
            $table->text('promotion_image')->nullable()->default(null);
            $table->string('discount_percentage',10)->nullable();
            $table->integer('product_id')->nullable();
            $table->integer('brand_id')->nullable();
            $table->integer('ordering')->nullable();
            $table->integer('category_id')->nullable();
            $table->date('promotion_expire_date')->nullable();
            $table->date('date_from')->nullable();
            $table->date('date_to')->nullable();
            $table->string('published',5)->nullable();
            $table->string('active',5)->nullable();
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

            Schema::dropIfExists('tbl_promotion');

    }
}
