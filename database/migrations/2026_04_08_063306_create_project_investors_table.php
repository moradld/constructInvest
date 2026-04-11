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
        Schema::create('project_investors', function (Blueprint $table) {
           $table->id();
            $table->foreignId('project_id')->constrained()->cascadeOnDelete();
            $table->foreignId('investor_id')->constrained()->cascadeOnDelete();

            $table->decimal('ownership_percent', 6, 3)->nullable();
            $table->decimal('profit_share_percent', 6, 3)->nullable();
            $table->string('status')->default('active')->index(); // active/exited

            $table->timestamps();

            $table->unique(['project_id', 'investor_id']);
            $table->index('investor_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_investors');
    }
};
