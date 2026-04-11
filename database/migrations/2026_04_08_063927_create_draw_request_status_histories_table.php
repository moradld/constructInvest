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
        Schema::create('draw_request_status_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('draw_request_id')->constrained('draw_requests')->cascadeOnDelete();

            $table->string('status')->index();
            $table->foreignId('actor_user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('occurred_at');
            $table->json('meta')->nullable();

            $table->timestamps();

            $table->index(['draw_request_id', 'occurred_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('draw_request_status_histories');
    }
};
