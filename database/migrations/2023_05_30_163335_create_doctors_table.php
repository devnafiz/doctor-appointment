<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();

            //$table->unsignedBigInteger('doctor_department_id');
            $table->string('specialist');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('doctor_department_id')->constrained()->onDelete('cascade');
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');

            // $table->foreign('doctor_department_id')->references('id')->on('doctor_departments');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
};
