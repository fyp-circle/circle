<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConnectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connections', function (Blueprint $table) {
            $table->bigIncrements('connection_id');
            $table->boolean('con_ini')->nullable();
            $table->boolean('approve')->nullable();
            $table->string('relation')->nullable();
            $table->integer('user1_id')->references('user_id')->on('users')->nullable();
            $table->integer('user2_id')->references('user_id')->on('users')->nullable();
            $table->integer('circle_id')->references('circle_id')->on('circles')->nullable();
            $table->integer('conversation_id')->references('conversation_id')->on('conversations')->nullable();
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
        Schema::dropIfExists('connections');
    }
}
