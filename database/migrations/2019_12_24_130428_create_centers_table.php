<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('c_id')->unique();
            $table->string('name');
            $table->string('address');
            $table->string('phone_1');
            $table->string('phone_2')->nullable();
            $table->string('email')->unique();
            $table->string('state');
            $table->string('city');
            $table->string('bank');
            $table->string('account_number');
            $table->string('account_name');
            $table->string('landmark')->nullable();
            $table->string('license');
            $table->string('status')->default('Pending Verification');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('centers');
    }
}