<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWishListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_wish_list', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->integer('user_id',11);
            $table->integer('product_id',11);
            $table->integer('category_id',11);
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

            Schema::dropIfExists('tbl_wish_list');

    }
}
