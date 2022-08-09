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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('quntity')->nullable();
            $table->unsignedFloat('selling_price_per_unit')->nullable();
            $table->unsignedFloat('total')->nullable();
            $table->unsignedFloat('first_batch')->nullable();
            $table->unsignedFloat('remaining_amount')->nullable();
            $table->unsignedInteger('Payment_period')->nullable();
            $table->unsignedFloat('monthly_installment')->nullable();
            $table->unsignedFloat('monthly_discount_amount')->nullable();
            $table->date('Payment_due_date')->nullable();
            $table->foreignId('customer_id')->references('id')->on('Customers')->nullable();
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
        Schema::dropIfExists('bills');
    }
};
