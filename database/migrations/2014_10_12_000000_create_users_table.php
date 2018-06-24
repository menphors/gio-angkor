<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50)->nullable();
            $table->string('first_name',50)->nullable();
            $table->string('last_name',50)->nullable();
            $table->enum('gender', ['m','f'])->nullable();
            $table->date('dob')->nullable();
            $table->string('username')->nullable();
            $table->string('email')->unique();
            $table->string('password',150)->nullable();
            $table->string('forgot_password',150)->nullable();
            $table->string('updated_password',150)->nullable();
            $table->string('flag_sec',150)->nullable();
            $table->dateTime('log_date')->nullable();
            $table->integer('role_id')->nullable();
            $table->integer('level_id')->nullable();
            $table->text('address')->nullable();
            $table->string('published')->nullable();
            $table->string('created_by')->nullable();
            $table->string('tel',25)->nullable();
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
        Schema::dropIfExists('users');
    }
}
