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
            $table->bigIncrements('id');
            $table->integer('a_id')->unique();
            $table->string('donor_id');
            $table->unsignedBigInteger('center_id');
            $table->date('appointment_date');
            $table->time('appointment_time');
            $table->string('status');
            $table->timestamps();

            $table->index('donor_id');
            $table->index('center_id');
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