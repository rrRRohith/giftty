<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 50);
            $table->string('short_description', 150);
            $table->text('description')->nullable();
            $table->integer('days');
            $table->time('cut_off');
            $table->integer('shipping_policy_id');
            $table->integer('priority');
            $table->boolean('delivery_date')->default(true);
            $table->boolean('local_delivery')->default(false);
            $table->boolean('status')->default(true);
            $table->decimal('charge', 10, 0);
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
        Schema::dropIfExists('shippings');
    }
}
