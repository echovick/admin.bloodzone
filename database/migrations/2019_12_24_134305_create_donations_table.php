<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('donation_id')->unique();
            $table->unsignedBigInteger('donor_id');
            $table->unsignedBigInteger('center_id');
            $table->unsignedBigInteger('pre_exam_id');
            $table->unsignedBigInteger('lab_scientist_id');
            $table->unsignedBigInteger('blood_bag_id');
            $table->decimal('amount_donated_cc', 5, 2);
            $table->date('donation_date');
            $table->timestamps();

            $table->index('donor_id');
            $table->index('pre_exam_id');
            $table->index('lab_scientist_id');
            $table->index('center_id');
            $table->index('blood_bag_id');

            $table->foreign('donor_id')->references('id')->on('donors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donations');
    }
}
