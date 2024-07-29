<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('firstname', 25);
            $table->string('lastname', 25);
            $table->enum('type', ['billing', 'shipping']);
            $table->string('location_type', 30)->nullable();
            $table->string('postalcode', 7);
            $table->string('city', 30);
            $table->string('province', 20);
            $table->string('phone', 15);
            $table->integer('user_id')->nullable();
            $table->string('email', 40)->nullable();
            $table->string('address', 150);
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
        Schema::dropIfExists('addresses');
    }
}