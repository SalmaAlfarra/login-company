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
        Schema::create('acquaintances_customer', function (Blueprint $table) {
            $table->id();
            $table->foreignId('acquaintance_id')->references('id')->on('Acquaintances')->nullable();
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
        Schema::dropIfExists('acquaintances_customer');
    }
};
