<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCenterAndGlobalInventoryIdForiegnKeyConstraintToBloodBags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blood_bags', function (Blueprint $table) {
            $table->foreign('center_id')->references('id')->on('centers')->onDelete('cascade');
            $table->foreign('global_inventory_id')->references('id')->on('global_inventories')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blood_bags', function (Blueprint $table) {
            //
        });
    }
}
