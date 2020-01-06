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
            $table->string('donation_id')->unique();
            $table->string('d_id');
            $table->unsignedBigInteger('center_id');
            $table->string('pe_id');
            $table->unsignedBigInteger('ls_id');
            $table->string('bb_id');
            $table->decimal('amount_donated_cc', 5, 2);
            $table->date('donation_date');
            $table->timestamps();

            $table->primary('donation_id');
            $table->index('d_id');
            $table->index('pe_id');
            $table->index('ls_id');
            $table->index('center_id');
            $table->index('bb_id');
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