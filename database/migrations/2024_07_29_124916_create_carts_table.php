<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->nullable()->default(1);
            $table->string('email', 50)->nullable();
            $table->boolean('open')->default(true);
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->boolean('status')->default(true);
            $table->integer('billing_id')->nullable();
            $table->integer('delivery_id')->nullable();
            $table->text('remarks')->nullable();
            $table->string('discount_code', 50)->nullable();
            $table->decimal('discount_value', 10, 0)->nullable();
            $table->string('discount_value_type', 20)->nullable();
            $table->string('discount_type', 30)->nullable();
            $table->integer('discount_id')->nullable();
            $table->text('special_note')->nullable();
            $table->text('card_message')->nullable();
            $table->text('order_note')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
