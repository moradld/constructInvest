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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();

            $table->foreignId('organization_id')->constrained()->cascadeOnDelete();
            $table->foreignId('project_id')->constrained()->cascadeOnDelete();
            $table->foreignId('folder_id')->nullable()->constrained('document_folders')->nullOnDelete();

            $table->foreignId('uploaded_by_user_id')->nullable()->constrained('users')->nullOnDelete();

            $table->string('name')->index();
            $table->string('original_name')->nullable();
            $table->string('file_ext')->nullable();
            $table->string('mime_type')->nullable();
            $table->unsignedBigInteger('size_bytes')->default(0);

            $table->string('disk')->default('public');
            $table->string('path');

            $table->string('tag')->nullable()->index(); // contract/blueprint/permit/invoice
            $table->string('status')->default('active')->index(); // active/approved/archived

            $table->timestamps();

            $table->index('organization_id');
            $table->index('project_id');
            $table->index('folder_id');
            $table->index('uploaded_by_user_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
