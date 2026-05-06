<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('order_files', function (Blueprint $table) {
            $table->id();

            $table->foreignId('order_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('type'); 
            // quote_pdf, proof_pdf, production_order_sheet, laser_ready_file

            $table->string('filename');
            $table->string('path');
            $table->string('mime_type')->default('application/pdf');
            $table->unsignedBigInteger('size_bytes')->default(0);

            $table->timestamps();

            $table->index(['order_id', 'type']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('order_files');
    }
};