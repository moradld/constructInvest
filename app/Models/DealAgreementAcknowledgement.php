<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DealAgreementAcknowledgement extends Model
{
    protected $fillable = [
        'deal_agreement_id',
        'user_id',
        'ack_reviewed',
        'ack_terms',
        'ack_responsibilities',
        'acknowledged_at',
    ];

    public function dealAgreement(): BelongsTo
    {
        return $this->belongsTo(DealAgreement::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
