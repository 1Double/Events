<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_employees', function (Blueprint $table) {
            $table->foreignId('event_id');
            $table->foreign('event_id')
            ->references('id')
            ->on('events')
            ->onDelete('cascade');

            $table->foreignId('employee_id');
            $table->foreign('employee_id')
            ->references('id')
            ->on('employees')
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
        Schema::dropIfExists('event_employees');
    }
}
