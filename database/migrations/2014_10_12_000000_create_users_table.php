<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('user_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('day')->nullable();
            $table->integer('month')->nullable();
            $table->integer('year')->nullable();
            $table->string('gender')->nullable();
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('about_me')->nullable();
            $table->string('profile_picture')->default('/images/users/Friend/Profile_Pictures/default.png');
            $table->string('cover_picture')->default('/images/users/Friend/Cover_Pictures/default.jpg');
            $table->integer('business_user_id')->references('business_user_id')->on('business_users')->nullable();
            $table->integer('family_user_id')->references('family_user_id')->on('family_users')->nullable();
            $table->rememberToken();
            $table->timestamps();
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
