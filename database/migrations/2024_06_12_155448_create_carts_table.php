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
        Schema::create('carts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('ID_User')->constrained(
                table: 'users',
                indexName: 'carts_ID_user'
            )->cascadeOnDelete();
            $table->foreignUuid('ID_Material')->constrained(
                table: 'materials',
                indexName: 'carts_ID_material'
            )->cascadeOnDelete();
            $table->integer('quantity');
            $table->decimal('total', 12, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
