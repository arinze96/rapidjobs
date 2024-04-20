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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->timestamp('subscription_open_date');
            $table->timestamp('subscription_close_date')->nullable();
            $table->string('subscription_status');
            $table->integer('payment_id');
            $table->string('payment_status');
            $table->integer('billing_cycle_id');
            $table->integer('subscription_cost');
            $table->string('renewable');
            $table->string('discount_code');
            $table->string('subscription_duration');
            $table->string('subscription_benefits');
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
        Schema::dropIfExists('subscriptions');
    }
};
