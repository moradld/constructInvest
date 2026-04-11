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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id')->constrained()->cascadeOnDelete();

            $table->string('code')->nullable()->index(); // searchable ID/code
            $table->string('name')->index();
            $table->text('description')->nullable();

            $table->string('location_name')->nullable()->index();

            $table->string('asset_type')->nullable()->index(); // commercial/residential/mixed_use
            $table->string('status')->default('active')->index(); // due_diligence/active/completed/archived

            $table->unsignedTinyInteger('completion_percent')->default(0);
            $table->date('projected_completion_date')->nullable();

            $table->timestamps();

            $table->index('organization_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
