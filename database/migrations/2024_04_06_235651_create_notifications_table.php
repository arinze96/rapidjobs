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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string('senders_id');
            $table->string('receipient_id');
            $table->string('notification_type');
            $table->string('notification_content');
            $table->string('read_status');
            $table->string('notification_status');
            $table->string('action_required');
            $table->string('notification_method');
            $table->string('notification_category');
            $table->string('notification_settings');
            $table->string('notification_delivery_status');
            $table->string('notification_title');
            $table->string('notification_trigger_event');
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
        Schema::dropIfExists('notifications');
    }
};
