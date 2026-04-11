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
        Schema::create('contractor_invoice_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contractor_invoice_id')->constrained('contractor_invoices')->cascadeOnDelete();

            // document_id comes later
            $table->unsignedBigInteger('document_id');

            $table->timestamps();

            // Explicit name keeps identifier under MySQL's 64-char limit.
            $table->unique(['contractor_invoice_id', 'document_id'], 'ci_docs_invoice_doc_uq');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contractor_invoice_documents');
    }
};
