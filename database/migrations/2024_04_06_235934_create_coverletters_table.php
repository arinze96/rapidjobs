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
        Schema::create('coverletters', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('cover_letter_title');
            $table->string('cover_letter_file');
            $table->string('cover_letter_visibilty');
            $table->string('cover_letter_status');
            $table->string('cover_letter_format');
            $table->string('cover_letter_language');
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
        Schema::dropIfExists('coverletters');
    }
};
