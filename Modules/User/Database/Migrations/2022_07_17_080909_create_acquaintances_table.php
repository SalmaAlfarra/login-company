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
        Schema::create('acquaintances', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->unsignedInteger('identification_number')->nullable();
            $table->string('relationship')->nullable();
            $table->string('address')->nullable();
            $table->foreignId('city_id')->references('id')->on('Cities')->nullable();
            $table->foreignId('phone_id')->references('id')->on('phons')->nullable();
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
        Schema::dropIfExists('acquaintances');
    }
};
