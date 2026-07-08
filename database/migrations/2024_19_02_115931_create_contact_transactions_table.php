<?php
// database/migrations/create_transactions_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            //Reference to the person buying
            $table->string('customer_id')->constrained('users');
            $table->string('amount');
            $table->string('currency');
            $table->string('state');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}