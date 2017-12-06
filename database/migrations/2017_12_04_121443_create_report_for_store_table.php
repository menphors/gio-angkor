<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportForStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_report_for_store', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('price',10);
            $table->integer('product_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('order_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

            Schema::dropIfExists('tbl_report_for_store');

    }
}
