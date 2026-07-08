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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('unique_id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->string('property_type')->nullable();
            $table->string('post_in_language')->nullable();
            $table->text('image')->nullable();
            $table->text('building_name')->nullable();
            $table->text('town')->nullable();
            $table->text('district')->nullable();
            $table->text('state')->nullable();
            $table->text('country')->nullable();
            $table->text('transaction_type')->nullable();
            $table->text('ownership_type')->nullable();
            $table->boolean('display_price')->nullable();
            $table->text('price')->nullable();
            $table->bigInteger('built_area')->nullable();
            $table->string('built_area_unit')->nullable();
            $table->bigInteger('plot_area')->nullable();
            $table->string('plot_area_unit')->nullable();           
            $table->string('bedrooms')->nullable();
            $table->string('bathrooms')->nullable();
            $table->string('constructed_year')->nullable();
            $table->text('description')->nullable();
            $table->bigInteger('distance_to_school')->nullable();
            $table->bigInteger('distance_to_hospital')->nullable();
            $table->bigInteger('distance_to_busstop')->nullable();
            $table->bigInteger('distance_to_airport')->nullable();
            $table->bigInteger('distance_to_railwaystation')->nullable();
            $table->bigInteger('distance_to_supermarket')->nullable();
            $table->bigInteger('distance_to_shopping')->nullable();
            $table->string('approval_status')->nullable();
            $table->string('status')->nullable();
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
};
