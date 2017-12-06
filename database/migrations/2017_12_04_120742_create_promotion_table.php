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
            $table->text('promotion_name');
            $table->string('promotion_prices',50);
            $table->text('promotion_image');
            $table->string('discount_percentage',10);
            $table->integer('product_id',11);
            $table->integer('brand_id',11);
            $table->integer('ordering',11);
            $table->integer('category_id',11);
            $table->date('promotion_expire_date');
            $table->date('date_from');
            $table->date('date_to');
            $table->string('published',5);
            $table->string('active',5);
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
