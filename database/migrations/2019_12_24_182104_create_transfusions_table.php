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
            $table->string('t_id')->unique();
            $table->string('p_id');
            $table->string('pe_id');
            $table->unsignedBigInteger('c_id');
            $table->string('bb_id');
            $table->unsignedBigInteger('ls_id');
            $table->decimal('amount_recieved_cc', 5, 2);
            $table->date('transfusion_date');
            $table->timestamps();

            $table->primary('t_id');
            $table->index('p_id');
            $table->index('pe_id');
            $table->index('c_id');
            $table->index('bb_id');
            $table->index('ls_id');
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