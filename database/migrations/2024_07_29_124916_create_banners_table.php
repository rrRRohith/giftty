<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('picture', 100)->nullable();
            $table->string('title', 100);
            $table->text('description');
            $table->string('link', 50);
            $table->string('button_text', 50);
            $table->integer('display_order');
            $table->string('banner_type', 20);
            $table->boolean('status');
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
        Schema::dropIfExists('banners');
    }
}
