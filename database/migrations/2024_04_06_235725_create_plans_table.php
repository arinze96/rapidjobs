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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('plan_name');
            $table->string('plan_description');
            $table->string('plan_feature');
            $table->string('plan_pricing');
            $table->string('currency');
            $table->string('discount');
            $table->string('renewal_options');
            $table->integer('payment_id');
            $table->string('tax_included');
            $table->string('refund_policy');
            $table->string('support_options');
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
        Schema::dropIfExists('plans');
    }
};
