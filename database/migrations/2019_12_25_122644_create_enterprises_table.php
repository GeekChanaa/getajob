<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnterprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterprises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('industry')->nullable();
            $table->date('founded')->nullable();
            $table->string('founders')->nullable();
            $table->string('headquarters')->nullable();
            $table->string('area_served')->nullable();
            $table->string('key_people')->nullable();
            $table->text('products')->nullable();
            $table->float('revenue')->nullable();
            $table->float('operating_income')->nullable();
            $table->float('net_income')->nullable();
            $table->float('total_assets')->nullable();
            $table->integer('nbr_employees')->nullable();
            $table->string('parent')->nullable();
            $table->string('website')->nullable();
            
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
        Schema::dropIfExists('enterprises');
    }
}
