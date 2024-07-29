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
            $table->integer('id', true);
            $table->integer('cart_id');
            $table->string('ipaddress', 50)->nullable();
            $table->boolean('status')->default(false);
            $table->integer('user_id')->nullable();
            $table->decimal('grand_total');
            $table->string('transaction_id', 15)->nullable();
            $table->string('payment_method', 25)->nullable();
            $table->boolean('payment_status')->default(true);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->string('invoice_id', 20)->default('1');
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
