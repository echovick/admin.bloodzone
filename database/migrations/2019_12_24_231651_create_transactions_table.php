<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->string('transaction_id')->unique();
            $table->date('date_of_transaction');
            $table->string('c_from');
            $table->string('c_to');
            $table->string('blood_type');
            $table->integer('no_of_units');
            $table->decimal('unit_price', 8, 2);
            $table->decimal('total_sales_price', 8, 2);
            $table->string('payment_status');
            $table->string('delivery_status');
            $table->timestamps();

            $table->primary('transaction_id');
            $table->index('c_from');
            $table->index('c_to');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}