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
        Schema::create('reports', function (Blueprint $table) {
             $table->id();

            $table->foreignId('organization_id')->constrained()->cascadeOnDelete();
            $table->foreignId('project_id')->nullable()->constrained()->nullOnDelete();

            $table->string('type')->index();   // investor/compliance/finance/other
            $table->string('title');

            $table->date('period_start')->nullable();
            $table->date('period_end')->nullable();

            $table->string('status')->default('ready')->index(); // pending/ready/failed/archived

            $table->string('disk')->default('public');
            $table->string('pdf_path')->nullable();

            $table->json('data_snapshot')->nullable();

            $table->foreignId('generated_by_user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('generated_at')->nullable()->index();

            $table->timestamps();

            $table->index('organization_id');
            $table->index('project_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
