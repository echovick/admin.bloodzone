<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_exams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pe_id')->unique();
            $table->unsignedBigInteger('lab_scientist_id');
            $table->unsignedBigInteger('center_id');
            $table->decimal('hemoglobin_gDl', 5, 2);
            $table->decimal('temperature_F', 5, 2);
            $table->string('blood_pressure');
            $table->integer('pulse_rate_BPM');
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->char('syphilis', 1);
            $table->char('hepatitis_b',1);
            $table->char('hepatitis_c',1);
            $table->char('hepatitis_e',1);
            $table->char('hiv',1);
            $table->timestamps();

            $table->index('center_id');
            $table->index('lab_scientist_id');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pre_exams');
    }
}