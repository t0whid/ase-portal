<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();

            $table->foreignId('order_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->unsignedInteger('line_no')->default(1);
            $table->unsignedInteger('qty')->default(1);

            $table->decimal('height', 8, 3)->nullable();
            $table->decimal('width', 8, 3)->nullable();
            $table->string('size_label')->nullable();

            $table->string('color')->nullable();
            $table->string('holes')->nullable();
            $table->string('hole_size')->nullable();
            $table->string('shape')->nullable();

            $table->longText('text_content')->nullable();
            $table->json('line_styles')->nullable();

            $table->decimal('unit_price', 10, 2)->default(0);
            $table->decimal('subtotal', 10, 2)->default(0);

            $table->json('payload')->nullable();

            $table->timestamps();

            $table->index('order_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};