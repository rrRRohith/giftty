<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductVariantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_variants', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('product_id')->nullable();
            $table->string('name', 50);
            $table->decimal('price', 10, 0);
            $table->text('description');
            $table->string('picture', 100)->nullable();
            $table->integer('stock');
            $table->string('type', 50)->nullable();
            $table->boolean('published')->default(true);
            $table->integer('attribute_id')->nullable()->default(0);
            $table->string('attribute_value', 50)->nullable();
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
        Schema::dropIfExists('product_variants');
    }
}
