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
            $table->integer('product_id',11);
            $table->integer('user_id',11);
            $table->integer('category_id',11);
            $table->integer('order_id',11);
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
