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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('brand_id')->constrained('brands')->cascadeOnDelete();
            $table->string('color')->nullable(False);
            $table->integer('prise');
            $table->integer('weight');
            $table->string('material');
            $table->string('image');
            $table->boolean('is_active');
            $table->boolean('is_popular');
            $table->boolean('is_new');
            $table->boolean('is_action');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
