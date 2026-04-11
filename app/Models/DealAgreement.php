<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DealAgreement extends Model
{
    protected $fillable = [
        'deal_id',
        'name',
        'provider',
        'provider_envelope_id',
        'status',
        'document_id',
        'signed_document_id',
    ];

    public function deal(): BelongsTo
    {
        return $this->belongsTo(Deal::class);
    }

    public function document(): BelongsTo
    {
        return $this->belongsTo(Document::class, 'document_id');
    }

    public function signedDocument(): BelongsTo
    {
        return $this->belongsTo(Document::class, 'signed_document_id');
    }

    public function acknowledgements(): HasMany
    {
        return $this->hasMany(DealAgreementAcknowledgement::class);
    }
}
