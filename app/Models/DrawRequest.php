<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DrawRequest extends Model
{
    protected $fillable = [
        'organization_id',
        'project_id',
        'loan_facility_id',
        'draw_number',
        'type',
        'priority',
        'status',
        'amount_requested',
        'amount_approved',
        'adjustment_amount',
        'draw_date',
        'approved_at',
        'paid_at',
        'requested_by_user_id',
        'approved_by_user_id',
        'notes',
    ];

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function loanFacility(): BelongsTo
    {
        return $this->belongsTo(LoanFacility::class);
    }

    public function requestedByUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'requested_by_user_id');
    }

    public function approvedByUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'approved_by_user_id');
    }

    public function allocations(): HasMany
    {
        return $this->hasMany(DrawRequestAllocation::class);
    }

    public function drawRequestDocuments(): HasMany
    {
        return $this->hasMany(DrawRequestDocument::class);
    }

    public function documents(): BelongsToMany
    {
        return $this->belongsToMany(Document::class, 'draw_request_documents')
            ->withTimestamps();
    }

    public function statusHistories(): HasMany
    {
        return $this->hasMany(DrawRequestStatusHistory::class);
    }
}
