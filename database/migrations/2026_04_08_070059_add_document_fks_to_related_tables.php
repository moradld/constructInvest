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
        Schema::table('contractor_compliance_items', function (Blueprint $table) {
            $table->foreign('document_id')
                ->references('id')->on('documents')
                ->nullOnDelete();
        });

        Schema::table('budget_item_attachments', function (Blueprint $table) {
            $table->foreign('document_id')
                ->references('id')->on('documents')
                ->cascadeOnDelete();
        });

        Schema::table('contractor_invoice_documents', function (Blueprint $table) {
            $table->foreign('document_id')
                ->references('id')->on('documents')
                ->cascadeOnDelete();
        });

        Schema::table('draw_request_documents', function (Blueprint $table) {
            $table->foreign('document_id')
                ->references('id')->on('documents')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('draw_request_documents', function (Blueprint $table) {
            $table->dropForeign(['document_id']);
        });

        Schema::table('contractor_invoice_documents', function (Blueprint $table) {
            $table->dropForeign(['document_id']);
        });

        Schema::table('budget_item_attachments', function (Blueprint $table) {
            $table->dropForeign(['document_id']);
        });

        Schema::table('contractor_compliance_items', function (Blueprint $table) {
            $table->dropForeign(['document_id']);
        });
    }
};
