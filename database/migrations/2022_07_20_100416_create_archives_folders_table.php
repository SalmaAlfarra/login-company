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
        Schema::create('archives_folders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('archives_id')->references('id')->on('Archives')->nullable();
            $table->foreignId('folders_id')->references('id')->on('Folders')->nullable();
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
        Schema::dropIfExists('archives_folders');
    }
};
