<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->integer('car_category_id');
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('price_per_day')->nullable();
            $table->string('discounted_price')->nullable();
            $table->string('vehicle_type')->nullable();
            $table->string('company')->nullable();
            $table->string('model')->nullable();
            $table->string('seats')->nullable();
            $table->string('suitcase')->nullable();
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
