<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('lab_scientist_id');
            $table->integer('order_number')->unique();
            $table->string('shipping_email');
            $table->string('shipping_name');
            $table->string('shipping_address');
            $table->string('shipping_country');
            $table->string('shipping_state');
            $table->string('shipping_city');
            $table->string('shipping_phone');
            $table->string('payment_gateway')->default('card');
            $table->string('shipping_fee')->nullable();
            $table->double('subtotal');
            $table->double('total');
            $table->integer('tax');
            $table->integer('num_of_items');
            $table->string('paystack_ref_number')->nullable();
            $table->boolean('paid')->default(false);

            $table->timestamps();

            $table->index('lab_scientist_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
