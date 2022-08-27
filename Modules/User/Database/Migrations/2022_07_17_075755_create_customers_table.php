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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('file_number')->nullable();
            $table->unsignedInteger('file_classification')->nullable();
            $table->string('full_name')->nullable();
            $table->unsignedInteger('identification_number')->nullable();
            $table->string('government_service_portal_password')->nullable();
            $table->string('address')->nullable();
            $table->foreignId('city_id')->references('id')->on('Cities')->nullable();
            $table->foreignId('phone_id')->references('id')->on('Phons')->nullable();
            $table->foreignId('police_office_id')->references('id')->on('Police_offices')->nullable();
            $table->foreignId('court_id')->references('id')->on('Courts')->nullable();
            $table->foreignId('payment_mechanism_id')->references('id')->on('Payment_mechanism')->nullable();
            $table->foreignId('work_id')->references('id')->on('Works')->nullable();
            $table->foreignId('material_statuse_id')->references('id')->on('Material_statuses')->nullable();
            $table->foreignId('salary_id')->references('id')->on('Salaries')->nullable();
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
        Schema::dropIfExists('customers');
    }
};
