<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->id();
            $table->integer('sender_id');
            $table->integer('receiver_id');
            $table->string('message_content');
            $table->string('read_status');
            $table->string('message_status');
            $table->string('attachment');
            $table->string('chat_type');
            $table->string('message_type');
            $table->integer('message_length');
            $table->string('message_encryption');
            $table->string('message_deletion_status');
            $table->string('message_reaction');
            $table->string('message_indicator_status');
            $table->string('chat_session');
            $table->string('blocked_status');
            $table->string('archived_status');
            $table->string('notification_settings');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chats');
    }
};
