<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProjectContract extends Model
{
    protected $fillable = [
        'project_id',
        'contractor_id',
        'work_type',
        'contract_value',
        'status',
        'start_date',
        'end_date',
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function contractor(): BelongsTo
    {
        return $this->belongsTo(Contractors::class, 'contractor_id');
    }

    public function contractorInvoices(): HasMany
    {
        return $this->hasMany(ContractorInvoice::class);
    }
}
