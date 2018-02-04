<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_history_user', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('quantity',25)->nullable();
            $table->double('price',25)->nullable();
            $table->date('date')->nullable();
            $table->string('status',255)->nullable();
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

            Schema::dropIfExists('tbl_history_user');

    }
}
