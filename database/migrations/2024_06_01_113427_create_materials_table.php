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
            $table->string('name');
            $table->foreignUuid('ID_Category')->constrained(
                table: 'categories',
                indexName: 'materials_ID_category'
            );
            $table->foreignUuid('ID_Partner')->constrained(
                table: 'partners',
                indexName: 'materials_ID_partner'
            );
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->decimal('price', 12, 2);
            $table->integer('stock');
            $table->string('unit');
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
