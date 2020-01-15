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
            $table->string('donor_id');
            $table->unsignedBigInteger('center_id');
            $table->string('pre_exam_id');
            $table->unsignedBigInteger('lab_scientist_id');
            $table->string('blood_bag_id');
            $table->decimal('amount_donated_cc', 5, 2);
            $table->date('donation_date');
            $table->timestamps();

            $table->index('donor_id');
            $table->index('pre_exam_id');
            $table->index('lab_scientist_id');
            $table->index('center_id');
            $table->index('blood_bag_id');
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