<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_users', function (Blueprint $table) {
            $table->bigIncrements('business_user_id');
            $table->string('name');
            $table->string('email')->nullable();;
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone')->nullable();
            $table->string('about_me')->nullable();
            $table->string('profile_picture')->default('images/users/Business/Profile_Pictures/default.png');
            $table->string('cover_picture')->default('images/users/Business/Cover_Pictures/default.jpg');
            $table->integer('user_id')->references('user_id')->on('users')->nullable();
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
        Schema::dropIfExists('business_users');
    }
}
