<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('product_id');
            $table->string('product_name', 50);
            $table->string('product_picture', 100);
            $table->integer('variant_id');
            $table->string('variant_name', 50);
            $table->decimal('price', 5);
            $table->integer('quantity');
            $table->string('product_sku', 15);
            $table->integer('cart_id');
            $table->integer('vendor_id')->nullable();
            $table->integer('store_id')->nullable();
            $table->text('card_message')->nullable();
            $table->text('special_note')->nullable();
            $table->text('special_instructions')->nullable();
            $table->string('postal_code', 7)->nullable();
            $table->dateTime('delivery_date')->nullable();
            $table->string('location_type', 25)->nullable();
            $table->integer('status')->default(0);
            $table->string('slug', 100)->nullable();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
