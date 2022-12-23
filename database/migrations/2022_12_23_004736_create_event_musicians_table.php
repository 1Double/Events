<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventMusiciansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_musicians', function (Blueprint $table) {
            $table->foreignId('event_id');
            $table->foreign('event_id')
            ->references('id')
            ->on('events')
            ->onDelete('cascade');

            $table->foreignId('musician_id');
            $table->foreign('musician_id')
            ->references('id')
            ->on('musicians')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_musicians');
    }
}
