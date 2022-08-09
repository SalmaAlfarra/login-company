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
        Schema::create('card_statments', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->unsignedFloat('collected_amount')->nullable();
            $table->unsignedInteger('movement_number')->nullable();
            $table->unsignedFloat('total_amount_collected')->nullable();
            $table->foreignId('credit_card_id')->references('id')->on('Credit_Cards')->nullable();
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
        Schema::dropIfExists('card__statments');
    }
};
