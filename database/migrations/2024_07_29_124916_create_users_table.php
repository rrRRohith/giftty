<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('firstname', 50);
            $table->string('lastname', 50)->nullable();
            $table->integer('role_id')->default(1);
            $table->string('email', 50);
            $table->string('password', 100);
            $table->boolean('status')->default(false);
            $table->text('bio')->nullable();
            $table->string('phone', 15);
            $table->boolean('verified')->nullable()->default(false);
            $table->string('remember_token', 50)->nullable();
            $table->enum('user_type', ['admin', 'vendor', 'customer', 'staff', 'user']);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->string('picture', 100)->nullable();
            $table->text('address')->nullable();
            $table->integer('province')->nullable();
            $table->string('city', 50)->nullable();
            $table->string('postalcode', 7)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
