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
        Schema::table('users', function (Blueprint $table) {
             $table->foreignId('organization_id')
                ->nullable()
                ->after('id')
                ->constrained('organizations')
                ->nullOnDelete();

            $table->string('professional_role')->nullable()->after('password');
            $table->string('company_name')->nullable()->after('professional_role');
            $table->string('avatar_path')->nullable()->after('company_name');

            $table->boolean('notify_email')->default(true)->after('avatar_path');
            $table->boolean('notify_push')->default(true)->after('notify_email');
            $table->boolean('notify_sms')->default(false)->after('notify_push');

            $table->index('organization_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropIndex(['organization_id']);
            $table->dropConstrainedForeignId('organization_id');

            $table->dropColumn([
                'professional_role',
                'company_name',
                'avatar_path',
                'notify_email',
                'notify_push',
                'notify_sms',
            ]);
        });
    }
};
