<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Payment extends Model
{
    protected $fillable = [
        'organization_id',
        'project_id',
        'payee_type',
        'payee_id',
        'payment_type',
        'amount',
        'processing_fee',
        'total_charged',
        'currency',
        'status',
        'payment_method',
        'external_transaction_id',
        'initiated_at',
        'completed_at',
        'internal_notes',
        'created_by_user_id',
    ];

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function createdByUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_user_id');
    }

    public function statusHistories(): HasMany
    {
        return $this->hasMany(PaymentStatusHistory::class);
    }
}
