<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 100);
            $table->string('slug', 100);
            $table->string('sku', 100);
            $table->integer('shipping_id')->nullable();
            $table->integer('store_id');
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->text('description')->nullable();
            $table->boolean('published')->default(true);
            $table->string('picture', 100)->nullable();
            $table->integer('type_id');
            $table->string('seo_title', 225)->nullable();
            $table->text('seo_description')->nullable();
            $table->text('seo_keyword')->nullable();
            $table->text('tag')->nullable();
            $table->decimal('weight', 10, 0)->default(0);
            $table->decimal('width', 10, 0)->nullable();
            $table->decimal('height', 10, 0)->nullable();
            $table->decimal('breadth', 10, 0)->nullable();
            $table->integer('shopping_category_id')->nullable();
            $table->integer('attribute_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
