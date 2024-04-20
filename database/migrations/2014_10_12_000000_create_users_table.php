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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('surname');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('date_of_birth');
            $table->integer('phone');
            $table->string('address');
            $table->string('profile_photo');
            $table->integer('role');
            $table->string('status');
            $table->integer('subscription_id')->nullable();
            $table->integer('resume_id');
            $table->integer('cover_letter_id');
            $table->string('linked_in')->nullable();
            $table->string('github')->nullable();
            $table->string('portfolio')->nullable();
            $table->timestamp('last_login');
            $table->integer('application_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
