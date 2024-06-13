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
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('ID_User')->constrained(
                table: 'users',
                indexName: 'orders_ID_user'
            )->cascadeOnUpdate();
            $table->dateTime('order_date')->useCurrent();
            $table->enum('status', ['Pending', 'Processing', 'Delivered', 'Canceled'])->default('Processing');
            $table->decimal('total_price', 12, 2);
            $table->timestamps();
        });

        Schema::create('order_details', function (Blueprint $table) {
            $table->foreignUuid('ID_Order')->constrained(
                table: 'orders',
                indexName: 'order_detail_ID_order'
            )->cascadeOnUpdate();
            $table->foreignUuid('ID_Material')->constrained(
                table: 'materials',
                indexName: 'order_detail_ID_material'
            )->cascadeOnUpdate();
            $table->integer('quantity');
            $table->decimal('total', 12, 2);
            $table->primary(['ID_Order', 'ID_Material']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
        Schema::dropIfExists('order_details');
    }
};
