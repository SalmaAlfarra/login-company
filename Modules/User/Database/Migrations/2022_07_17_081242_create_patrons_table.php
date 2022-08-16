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
        Schema::create('patrons', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('grandfather_name')->nullable();
            $table->string('family_name')->nullable();
            $table->unsignedInteger('identification_number')->nullable();
            $table->string('government_service_portal_password')->nullable();
            $table->string('job_title')->nullable();
            $table->string('job_type')->nullable();
            $table->string('employer')->nullable();
            $table->unsignedInteger('bank_account_number')->nullable();
            $table->unsignedFloat('salary')->nullable();
            $table->string('address')->nullable();
            $table->foreignId('city_id')->references('id')->on('Cities')->nullable();
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
        Schema::dropIfExists('patrons');
    }
};
