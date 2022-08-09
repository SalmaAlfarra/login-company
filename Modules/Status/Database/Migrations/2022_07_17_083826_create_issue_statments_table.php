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
        Schema::create('issue_statments', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('explanation_and_statement')->nullable();
            $table->unsignedFloat('collected_amount')->nullable();
            $table->unsignedFloat('remaining_amount')->nullable();
            $table->unsignedFloat('total_amount_collected')->nullable();
            $table->unsignedFloat('agreed_nstallment')->nullable();
            $table->foreignId('issue_id')->references('id')->on('issues')->nullable();
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
        Schema::dropIfExists('issue__statments');
    }
};
