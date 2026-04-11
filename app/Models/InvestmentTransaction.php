<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InvestmentTransaction extends Model
{
    protected $fillable = [
        'project_id',
        'investor_id',
        'amount',
        'status',
        'received_at',
        'reference',
        'notes',
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function investor(): BelongsTo
    {
        return $this->belongsTo(Investor::class);
    }
}
