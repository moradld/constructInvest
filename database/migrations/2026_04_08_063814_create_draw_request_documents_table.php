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
        Schema::create('draw_request_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('draw_request_id')->constrained('draw_requests')->cascadeOnDelete();

            // document_id comes later
            $table->unsignedBigInteger('document_id');

            $table->timestamps();

            $table->unique(['draw_request_id', 'document_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('draw_request_documents');
    }
};
