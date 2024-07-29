<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('subject', 100);
            $table->text('body');
            $table->text('body_html')->nullable();
            $table->string('recipient_id', 60)->nullable();
            $table->string('sender_id', 60)->nullable();
            $table->integer('parent_id')->nullable();
            $table->boolean('recipient_status')->default(true);
            $table->boolean('sender_status')->default(true);
            $table->string('attachment', 100)->nullable();
            $table->enum('recipient_folder', ['inbox', 'sent', 'trash'])->nullable()->default('inbox');
            $table->enum('sender_folder', ['inbox', 'sent', 'trash'])->nullable()->default('sent');
            $table->dateTime('read_at')->nullable();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->dateTime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
