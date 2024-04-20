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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->integer('plan_id');
            $table->string('title');
            $table->string('description');
            $table->string('date_posted');
            $table->string('company_name');
            $table->string('company_logo');
            $table->string('industry');
            $table->string('salary_range');
            $table->string('responsabilities');
            $table->string('application_deadline');
            $table->string('application_method');
            $table->string('application_email');
            $table->string('application_url');
            $table->string('job_status');
            $table->integer('views_count');
            $table->integer('number_of_applicants');
            $table->string('hiring_manager');
            $table->string('benefits');
            $table->string('company_website');
            $table->string('bannner_image');
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
        Schema::dropIfExists('jobs');
    }
};
