<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('company');
            $table->string('employment_type');
            $table->string('company_industry');
            $table->string('seniority_level');
            $table->text('description');
            $table->unsignedInteger('location_country_id');
            $table->foreign('location_country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->unsignedInteger('location_city_id');
            $table->foreign('location_city_id')->references('id')->on('cities')->onDelete('cascade');
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
}
