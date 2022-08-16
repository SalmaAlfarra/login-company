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
            $table->string('first_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('grandfather_name')->nullable();
            $table->string('family_name')->nullable();
            $table->unsignedInteger('identification_number')->nullable();
            $table->date('identification_issuance_date')->nullable();
            $table->string('government_service_portal_password')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('job_title')->nullable();
            $table->string('job_type');
            $table->string('employer');
            $table->unsignedInteger('bank_account_number');
            $table->unsignedFloat('salary');
            $table->string('address')->nullable();
            $table->string('profile_image', 100)->nullable();
            $table->string('marital_status')->nullable();
            $table->string('partner_first_name');
            $table->string('partner_father_name');
            $table->string('partner_grandfather_name');
            $table->string('partner_family_name');
            $table->unsignedInteger('partner_identification_number');
            $table->string('partner_employer');
            $table->string('partner_family_address');
            $table->foreignId('police_office_id')->references('id')->on('Police_offices')->nullable();
            $table->foreignId('court_id')->references('id')->on('Courts')->nullable();
            $table->foreignId('city_id')->references('id')->on('Cities')->nullable();
            $table->foreignId('branch_id')->references('id')->on('Branches')->nullable();
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
