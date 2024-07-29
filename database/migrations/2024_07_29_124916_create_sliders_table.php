<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('picture', 100)->nullable();
            $table->string('title', 100);
            $table->text('description');
            $table->string('link', 50);
            $table->string('button_text', 40);
            $table->integer('display_order');
            $table->enum('slider_type', ['home']);
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
        Schema::dropIfExists('sliders');
    }
}
