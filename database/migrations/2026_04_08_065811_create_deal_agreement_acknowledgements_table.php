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
        Schema::create('deal_agreement_acknowledgements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('deal_agreement_id')->constrained('deal_agreements')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();

            $table->boolean('ack_reviewed')->default(false);
            $table->boolean('ack_terms')->default(false);
            $table->boolean('ack_responsibilities')->default(false);

            $table->timestamp('acknowledged_at')->nullable();

            $table->timestamps();

            $table->unique(['deal_agreement_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deal_agreement_acknowledgements');
    }
};
