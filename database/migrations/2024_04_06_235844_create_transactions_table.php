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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('subscription_id');
            $table->timestamp('transaction_date');
            $table->string('transaction_type');
            $table->integer('payment_id');
            $table->integer('amount');
            $table->string('currency');
            $table->integer('invoice_id');
            $table->string('transaction_description');
            $table->integer('billing_cycle_id');
            $table->integer('tax_amount');
            $table->integer('discount_amount');
            $table->string('ip_address');
            $table->string('device_info');
            $table->string('transaction_status');
            $table->string('transaction_source');
            $table->integer('plan_id');
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
        Schema::dropIfExists('transactions');
    }
};
