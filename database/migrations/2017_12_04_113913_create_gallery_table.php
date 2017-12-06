<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_gallery', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->text('gellery_name');
            $table->text('gallery_images');
            $table->dateTime('gallery_added_date');
            $table->integer('ordering',11);
            $table->integer('thumbnail_id',11);
            $table->string('published',5);
            $table->dateTime('upd_date');
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

            Schema::dropIfExists('tbl_gallery');

    }
}
