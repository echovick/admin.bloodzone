<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLabScientistPreExamBloodBagDonorAndCenterIdForiegnKeyConstraintToDonations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('donations', function (Blueprint $table) {

            $table->unsignedBigInteger('lab_scientist_id')->nullable()->change();
            $table->unsignedBigInteger('blood_bag_id')->nullable()->change();

            $table->foreign('donor_id')->references('id')->on('donors')->onDelete('cascade');
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
        Schema::table('donations', function (Blueprint $table) {
            //
        });
    }
}
