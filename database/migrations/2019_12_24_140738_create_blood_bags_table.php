<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodBagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_bags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bb_id')->unique();
            $table->unsignedBigInteger('center_id');
            $table->unsignedBigInteger('global_inventory_id');
            $table->string('donation_type');
            $table->decimal('quantity_cc', 5, 2);
            $table->string('blood_type');
            $table->date('expiry_date');
            $table->timestamps();

            $table->index('center_id');
            $table->index('global_inventory_id');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blood_bags');
    }
}