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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('date_of_birth');
            $table->char('gender', 1);
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('password');
            $table->string('address');
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