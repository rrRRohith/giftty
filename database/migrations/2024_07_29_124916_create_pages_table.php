<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 250);
            $table->text('content');
            $table->string('slug', 250);
            $table->string('picture', 225)->nullable();
            $table->boolean('published')->default(false);
            $table->string('seo_title', 225);
            $table->string('seo_description', 225);
            $table->text('seo_keyword');
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
        Schema::dropIfExists('pages');
    }
}
