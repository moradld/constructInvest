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
        Schema::create('facility_projects', function (Blueprint $table) {
            $table->id();

            $table->foreignId('loan_facility_id')->constrained('loan_facilities')->cascadeOnDelete();
            $table->foreignId('project_id')->constrained('projects')->cascadeOnDelete();

            $table->decimal('committed_amount', 15, 2)->nullable();
            $table->decimal('current_balance', 15, 2)->default(0);

            $table->string('status')->default('active')->index(); // active/closed

            $table->timestamps();

            $table->unique(['loan_facility_id', 'project_id']);
            $table->index('project_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facility_projects');
    }
};
