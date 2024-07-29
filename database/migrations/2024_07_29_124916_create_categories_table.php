<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 50);
            $table->boolean('status')->default(true);
            $table->integer('parent_id')->nullable();
            $table->integer('display_order');
            $table->string('slug', 50)->nullable();
            $table->string('picture', 100)->nullable();
            $table->string('icon', 50)->nullable();
            $table->text('description');
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
        Schema::dropIfExists('categories');
    }
}
