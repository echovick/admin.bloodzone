<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGlobalInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('global_inventories', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('bb_id');
            $table->string('c_id');
            $table->boolean('available');
            $table->decimal('price', 8, 2);
            $table->timestamps();

            $table->index('bb_id');
            $table->index('c_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('global_inventories');
    }
}