<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_category', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->text('category_name')->nulllable();
            $table->integer('ordering')->nulllable();
            $table->integer('pro_id')->nulllable();
            $table->string('published',5)->nulllable();
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

            Schema::dropIfExists('tbl_category');

    }
}
