<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodBagOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_bag_order', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('lab_scientist_id');
            $table->unsignedBigInteger('center_id');
            $table->string('status')->default('pending payment');
            $table->unsignedBigInteger('blood_bag_id');            
            
            $table->timestamps();

            $table->index('order_id');
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
        Schema::dropIfExists('blood_bag_order');
    }
}
