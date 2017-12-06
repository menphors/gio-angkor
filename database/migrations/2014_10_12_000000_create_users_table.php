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
            $table->string('name',50);
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->enum('gender', ['m','f']);
            $table->date('dob');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password',150);
            $table->string('forgot_password',150);
            $table->string('updated_password',150);
            $table->string('flag_sec',150);
            $table->dateTime('log_date');
            $table->integer('role_id')->unsigned();
            $table->integer('level_id')->unsigned();
            $table->text('address');
            $table->string('published');
            $table->string('created_by');
            $table->string('tel',25)->unique();
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
