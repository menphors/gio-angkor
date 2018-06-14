<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_level', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('level_name',50)->nullable();
            $table->string('level_slog',50)->nullable();
            $table->text('remark')->nullable();
            $table->string('published',5)->nullable();
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

            Schema::dropIfExists('tbl_level');

    }
}
