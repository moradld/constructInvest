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
        Schema::create('connected_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            $table->string('provider'); // stripe/plaid/google_drive
            $table->string('status')->default('connected'); // connected/disconnected

            $table->string('external_id')->nullable();

            $table->text('access_token')->nullable();
            $table->text('refresh_token')->nullable();
            $table->timestamp('expires_at')->nullable();

            $table->json('meta')->nullable();

            $table->timestamp('connected_at')->nullable();
            $table->timestamp('disconnected_at')->nullable();

            $table->timestamps();

            $table->unique(['user_id', 'provider']);
            $table->index(['user_id', 'provider']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('connected_accounts');
    }
};
