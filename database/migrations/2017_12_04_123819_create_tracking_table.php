<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrackingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tracking', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('tracking_number',150);
            $table->integer('store_id')->unsigned();
            $table->text('status');
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

            Schema::dropIfExists('tbl_sub_category');

    }
}
