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
        Schema::create('credit_cards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('card_number')->nullable();
            $table->string('type')->nullable();
            $table->date('expire_date')->nullable();
            $table->date('release_date')->nullable();
            $table->unsignedInteger('card_pin')->nullable();
            $table->text('descreption')->nullable();
            $table->boolean('status')->nullable();
            $table->foreignId('customer_id')->references('id')->on('Customers')->nullable();
            $table->foreignId('branche_id')->references('id')->on('Branches')->nullable();
            $table->foreignId('bank_id')->references('id')->on('Banks')->nullable();
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
        Schema::dropIfExists('credit_cards');
    }
};
