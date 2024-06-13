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
            $table->uuid('id');
            $table->foreignUuid('ID_User')->constrained(
                table: 'users',
                indexName: 'orders_ID_user'
            )->cascadeOnUpdate();
            $table->foreignUuid('ID_Cart')->constrained(
                table: 'carts',
                indexName: 'orders_ID_cart'
            )->cascadeOnUpdate();
            $table->dateTime('order_date')->useCurrent();
            $table->enum('status', ['Pending', 'Processing', 'Delivered', 'Cancelled'])->default('Pending');
            $table->decimal('total_price', 12, 2);
            $table->string('address');
            $table->string('phone_number', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
