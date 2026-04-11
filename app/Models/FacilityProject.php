<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FacilityProject extends Model
{
    protected $fillable = [
        'loan_facility_id',
        'project_id',
        'committed_amount',
        'current_balance',
        'status',
    ];

    public function loanFacility(): BelongsTo
    {
        return $this->belongsTo(LoanFacility::class);
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
