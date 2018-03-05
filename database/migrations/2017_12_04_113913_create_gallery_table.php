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
            $table->text('gellery_name')->nullable();
            $table->text('gallery_images')->nullable();
            $table->dateTime('gallery_added_date')->nullable();
            $table->integer('ordering')->nullable();
            $table->integer('thumbnail_id')->nullable();
            $table->string('published',5)->nullable();
            $table->dateTime('upd_date')->nullable();
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
