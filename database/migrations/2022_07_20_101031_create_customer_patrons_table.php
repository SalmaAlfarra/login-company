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
        Schema::create('customer_patrons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->references('id')->on('Customers')->nullable();
            $table->foreignId('patron_id')->references('id')->on('Patrons')->nullable();
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
        Schema::dropIfExists('customer_patrons');
    }
};
