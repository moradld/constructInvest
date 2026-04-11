<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ContractorComplianceItem extends Model
{
    protected $fillable = [
        'contractor_id',
        'type',
        'status',
        'expires_at',
        'document_id',
    ];

    public function contractor(): BelongsTo
    {
        return $this->belongsTo(Contractors::class, 'contractor_id');
    }

    public function document(): BelongsTo
    {
        return $this->belongsTo(Document::class);
    }
}
