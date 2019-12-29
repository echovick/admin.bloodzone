<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->string('d_id')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('date_of_birth');
            $table->char('gender', 1);
            $table->string('password')->nullable();
            $table->timestamps();

            $table->primary('d_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donors');
    }
}