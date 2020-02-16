<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifs', function (Blueprint $table) {
            $table->bigIncrements('notif_id');
            $table->string('title')->nullable();
            $table->string('content')->nullable();
            $table->boolean('read')->nullable();
            $table->integer('user_id')->references('user_id')->on('users')->nullable();
            $table->integer('circle_id')->references('circle_id')->on('circles')->nullable();
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
        Schema::dropIfExists('notifs');
    }
}
