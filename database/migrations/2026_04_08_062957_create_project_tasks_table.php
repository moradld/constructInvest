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
        Schema::create('project_tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained()->cascadeOnDelete();

            $table->string('name');
            $table->unsignedTinyInteger('progress_percent')->default(0);

            $table->string('status')->default('scheduled')->index(); // scheduled/active/delayed/done/future
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

            $table->boolean('is_critical')->default(false)->index();
            $table->unsignedInteger('sort_order')->default(0);

            $table->timestamps();

            $table->index(['project_id', 'status']);
            $table->index(['project_id', 'start_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_tasks');
    }
};
