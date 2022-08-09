<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_statments', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('explanation_and_statement')->nullable();
            $table->unsignedInteger('debtor')->nullable();
            $table->unsignedInteger('creditor')->nullable();
            $table->unsignedInteger('balance')->nullable();
            $table->foreignId('customer_id')->references('id')->on('Customer');
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
        Schema::dropIfExists('account__statments');
    }
};
