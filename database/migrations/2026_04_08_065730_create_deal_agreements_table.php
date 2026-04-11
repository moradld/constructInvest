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
        Schema::create('deal_agreements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('deal_id')->constrained('deals')->cascadeOnDelete();

            $table->string('name');
            $table->string('provider')->default('docusign');
            $table->string('provider_envelope_id')->nullable()->index();

            $table->string('status')->default('pending_signature')->index(); // pending_signature/signed/declined/expired

            $table->foreignId('document_id')->nullable()->constrained('documents')->nullOnDelete();
            $table->foreignId('signed_document_id')->nullable()->constrained('documents')->nullOnDelete();

            $table->timestamps();

            $table->index('deal_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deal_agreements');
    }
};
