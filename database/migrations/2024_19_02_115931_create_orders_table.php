<?php
// database/migrations/create_orders_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            //Reference to the person buying
            $table->string('customer_id')->constrained('users');
            $table->foreignId('add_id')->constrained('ads');
            $table->string('amount');
            $table->string('currency');
            $table->string('state');
            $table->string('order_id');
            $table->string('token');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}