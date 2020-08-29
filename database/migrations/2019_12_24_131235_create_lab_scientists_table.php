<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabScientistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_scientists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ls_id')->unique();
            $table->unsignedBigInteger('center_id');
            $table->unsignedBigInteger('lab_scientist_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->char('gender', 1)->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('phone')->nullable();
            $table->string('password');
            $table->string('address')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->index('center_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lab_scientists');
    }
}
