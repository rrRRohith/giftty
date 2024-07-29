<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discounts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('code', 50);
            $table->text('description');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->decimal('min_amount', 10, 0);
            $table->integer('max_usage');
            $table->decimal('value', 10, 0);
            $table->enum('value_type', ['amount', 'percentage']);
            $table->integer('use_count')->nullable()->default(0);
            $table->enum('discount_type', ['coupon', 'shipped']);
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('discounts');
    }
}
