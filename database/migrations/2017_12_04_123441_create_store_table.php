<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_store', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->text('store_name');
            $table->text('store_location_address');
            $table->string('store_approval',5);
            $table->text('store_contact');
            $table->date('store_created_date');
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

            Schema::dropIfExists('tbl_store');

    }
}
