<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_setting_items', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->integer('setting_item_type_id')->unsigned();
            $table->text('setting_item_name');
            $table->text('setting_item_value');
            $table->text('setting_item_other');
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

            Schema::dropIfExists('tbl_setting_items');

    }
}
