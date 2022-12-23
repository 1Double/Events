<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('place');
            $table->date('event_date');
            $table->integer('price');
            
            $table->foreignId('event_id');
            $table->foreign('event_id')
            ->references('id')
            ->on('events')
            ->onDelete('cascade');

            $table->foreignId('user_id');
            $table->foreign('user_id')
            ->references('id')
            ->on('participants')
            ->onDelete('cascade');

            $table->foreignId('payment_status');
            $table->foreign('payment_status')
            ->references('id')
            ->on('payment_statuses')
            ->onDelete('cascade');


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
        Schema::dropIfExists('tickets');
    }
}
