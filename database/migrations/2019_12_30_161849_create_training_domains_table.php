<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_domains', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('domain_id');
            $table->foreign('domain_id')->references('id')->on('domains')->onDelete('cascade');
            $table->unsignedInteger('training_id');
            $table->foreign('training_id')->references('id')->on('trainings')->onDelete('cascade');
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
        Schema::dropIfExists('training_domains');
    }
}
