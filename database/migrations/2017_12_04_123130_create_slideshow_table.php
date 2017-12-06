<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlideshowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_slideshow', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->text('slide_name');
            $table->integer('slide_image_id')->unsigned();
            $table->integer('thumbnail_id')->unsigned();
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

            Schema::dropIfExists('tbl_slideshow');
    }
}
