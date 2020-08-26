<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('p_id')->unique();
            $table->unsignedBigInteger('center_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->date('date_of_birth');
            $table->string('blood_type');
            $table->string('need_status');
            $table->timestamps();

            $table->index('center_id');
            $table->foreign('center_id')->references('id')->on('centers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
