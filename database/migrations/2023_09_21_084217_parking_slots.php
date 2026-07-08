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
        Schema::create('parking_slots', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->string('name')->nullable();
            $table->string('price')->nullable();
            $table->string('currency')->nullable();
            $table->text('full_address')->nullable();
            $table->text('town')->nullable();
            $table->text('district')->nullable();
            $table->text('state')->nullable();
            $table->text('country')->nullable();         
            $table->text('image')->nullable();
            $table->string('verified')->nullable();
            $table->string('featured')->nullable();
            $table->string('ownership')->nullable();
            $table->text('description')->nullable();
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
        //
    }
};
