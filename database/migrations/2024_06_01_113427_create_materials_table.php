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
            $table->uuid('id')->primary();
            $table->foreignUuid('ID_Category')->constrained(
                table: 'categories',
                indexName: 'materials_ID_category'
            );
            $table->string('Name');
            $table->string('Image')->nullable();
            $table->string('Description')->nullable();
            $table->decimal('Price', 12, 2);
            $table->integer('Stock');
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
