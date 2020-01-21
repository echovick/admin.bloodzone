<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfusionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfusions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('t_id')->unique();
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('pre_exam_id');
            $table->unsignedBigInteger('center_id');
            $table->unsignedBigInteger('blood_bag_id')->unique();
            $table->unsignedBigInteger('lab_scientist_id');
            $table->decimal('amount_recieved_cc', 5, 2);
            $table->date('transfusion_date');
            $table->timestamps();

            $table->index('patient_id');
            $table->index('pre_exam_id');
            $table->index('center_id');
            $table->index('blood_bag_id');
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
        Schema::dropIfExists('transfusions');
    }
}