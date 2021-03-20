<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('agent_id');
            $table->string('title');
            $table->string('address');
            $table->string('location');
            $table->string('city');
            $table->string('property_type');
            $table->string('property_status');
            $table->string('area');
            $table->string('bedrooms');
            $table->string('bathrooms');
            $table->string('garage')->nullable();
            $table->string('price');
            $table->string('built_year')->nullable();
            $table->string('floor_type');
            $table->string('video')->nullable();
            $table->string('ac')->nullable();
            $table->string('belcony')->nullable();
            $table->string('swimming_pool')->nullable();
            $table->string('cable_tv')->nullable();
            $table->string('image_one')->nullable();
            $table->string('image_two')->nullable();
            $table->string('image_three')->nullable();
            $table->string('image_four')->nullable();
            $table->string('image_five')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
