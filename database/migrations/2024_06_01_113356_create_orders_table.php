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
            $table->uuid('ID_Order')->primary();
            $table->foreignId('ID_User')->constrained(
                table: 'users',
                indexName: 'orders_users_id'
            )->nullOnDelete();
            $table->dateTime('Order_Date')->useCurrent();
            $table->enum('Status', ['Pending', 'Processing', 'Delivered', 'Cancelled'])->default('Pending');
            $table->decimal('Total_Price', 12, 2);
            $table->string('Address');
            $table->string('Phone_Number', 15);
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
