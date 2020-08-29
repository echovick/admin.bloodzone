<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLabScientistPreExamBloodBagPatientAndCenterIdForiegnKeyConstraintToTransfusions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transfusions', function (Blueprint $table) {

            $table->unsignedBigInteger('lab_scientist_id')->nullable()->change();
            $table->unsignedBigInteger('blood_bag_id')->nullable()->change();
            
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreign('pre_exam_id')->references('id')->on('pre_exams')->onDelete('restrict');
            $table->foreign('lab_scientist_id')->references('id')->on('lab_scientists')->onDelete('set null');
            $table->foreign('center_id')->references('id')->on('centers')->onDelete('cascade');
            $table->foreign('blood_bag_id')->references('id')->on('blood_bags')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transfusions', function (Blueprint $table) {
            //
        });
    }
}
