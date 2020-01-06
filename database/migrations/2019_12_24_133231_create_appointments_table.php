<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->integer('a_id')->unique();
            $table->string('d_id');
            $table->unsignedBigInteger('c_id');
            $table->date('appointment_date');
            $table->time('appointment_time');
            $table->string('status');
            $table->timestamps();

            $table->primary('a_id');
            $table->index('d_id');
            $table->index('c_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}