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
        Schema::create('materials', function (Blueprint $table) {
            $table->uuid('ID_Material')->primary();
            $table->string('Name');
            $table->string('Image')->nullable();
            $table->string('Description')->nullable();
            $table->decimal('Price', 12, 2);
            $table->integer('Stock');
            $table->foreignId('ID_Category')->constrained(
                table: 'categories',
                indexName: 'materials_categories_id'
            )->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};
