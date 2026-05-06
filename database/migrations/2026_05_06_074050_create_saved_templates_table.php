<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('saved_templates', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('name');
            $table->string('job_name')->nullable();

            // Full portal form/config data
            $table->json('payload');

            // For quick display in account modal
            $table->unsignedInteger('total_tags')->default(0);
            $table->unsignedInteger('total_pieces')->default(0);

            $table->timestamps();

            $table->index('user_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('saved_templates');
    }
};