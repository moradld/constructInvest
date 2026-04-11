<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InvestorPerformanceSnapshot extends Model
{
    protected $fillable = [
        'investor_id',
        'snapshot_date',
        'aum_value',
        'roi_percent',
    ];

    public function investor(): BelongsTo
    {
        return $this->belongsTo(Investor::class);
    }
}
