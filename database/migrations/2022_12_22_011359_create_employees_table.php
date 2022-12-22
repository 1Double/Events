<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('surname');
            $table->string('patronymic');
            $table->string('phone_number');
            $table->string('passport');
            $table->integer('salary');
            //$table->foreignId('job');
            $table->timestamps();
            
            $table->integer('job')->unsigned()->index();
            $table->foreign('id')
            ->references('id')
            ->on('jobs')
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
        Schema::dropIfExists('employees');
    }
}