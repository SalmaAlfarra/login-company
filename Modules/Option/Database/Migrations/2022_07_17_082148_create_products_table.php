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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 250)->nullable();
            $table->text('description')->nullable();
            $table->unsignedFloat('wholesale_priceper_unit')->nullable();
            $table->unsignedFloat('selling_priceper_unit')->nullable();
            $table->unsignedInteger('quntity')->nullable();
            $table->string('product_image', 100)->nullable();
            $table->boolean('status')->nullable();
            $table->foreignId('user_id')->references('id')->on('Users')->nullable();
            $table->foreignId('category_id')->references('id')->on('Categories')->nullable();
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
        Schema::dropIfExists('products');
    }
};
