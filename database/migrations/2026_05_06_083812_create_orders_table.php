<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->string('order_number')->unique();
            $table->string('quote_number')->nullable();

            // Customer info
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('customer_phone')->nullable();
            $table->string('company')->nullable();
            $table->string('job_name')->nullable();

            // Order summary
            $table->unsignedInteger('total_tags')->default(0);
            $table->unsignedInteger('total_pieces')->default(0);

            $table->decimal('product_subtotal', 10, 2)->default(0);
            $table->decimal('product_total', 10, 2)->default(0);
            $table->decimal('shipping_total', 10, 2)->default(0);
            $table->decimal('grand_total', 10, 2)->default(0);

            // Shipping / billing
            $table->json('shipping_address')->nullable();
            $table->json('billing_address')->nullable();
            $table->string('shipping_method')->nullable();

            // Payment placeholder, no raw card data
            $table->string('payment_status')->default('pending');
            $table->string('payment_method')->nullable();
            $table->string('card_last_four')->nullable();

            // Status
            $table->string('order_status')->default('submitted');
            $table->boolean('proof_approved')->default(false);
            $table->timestamp('proof_approved_at')->nullable();

            // Full frontend payload for production/email/pdf
            $table->json('payload');

            $table->timestamps();

            $table->index(['user_id', 'created_at']);
            $table->index('order_status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};