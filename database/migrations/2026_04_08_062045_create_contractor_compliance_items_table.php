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
        Schema::create('contractor_compliance_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contractor_id')->constrained()->cascadeOnDelete();

            $table->string('type');   // insurance_certificate, safety_training, license, w9...
            $table->string('status')->index(); // active/expired/due
            $table->timestamp('expires_at')->nullable();

            // document_id comes later (documents table). Add FK in a later migration.
            $table->unsignedBigInteger('document_id')->nullable();

            $table->timestamps();

            $table->index(['contractor_id', 'type']);
            $table->index(['contractor_id', 'status']);
            $table->index('expires_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contractor_compliance_items');
    }
};
