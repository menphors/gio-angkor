<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_comment', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->text('comment_name');
            $table->text('comment_description');
            $table->integer('user_id',11);
            $table->integer('product_id',11);
            $table->string('flag_active',2);
            $table->dateTime('comment_date');
            $table->dateTime('comment_update_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

            Schema::dropIfExists('tbl_comment');

    }
}
