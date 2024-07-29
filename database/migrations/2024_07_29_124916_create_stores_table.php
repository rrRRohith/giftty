<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->integer('vendor_category_id');
            $table->string('name', 100);
            $table->string('store_email', 50);
            $table->string('slug', 100);
            $table->string('address', 150)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('postalcode', 7)->nullable();
            $table->char('province', 2)->nullable();
            $table->string('phone', 15)->nullable();
            $table->string('mobile', 15)->nullable();
            $table->string('logo', 50)->nullable();
            $table->text('description')->nullable();
            $table->string('website', 100)->nullable();
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
        Schema::dropIfExists('stores');
    }
}
