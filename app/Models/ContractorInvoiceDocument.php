<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ContractorInvoiceDocument extends Model
{
    protected $fillable = [
        'contractor_invoice_id',
        'document_id',
    ];

    public function contractorInvoice(): BelongsTo
    {
        return $this->belongsTo(ContractorInvoice::class);
    }

    public function document(): BelongsTo
    {
        return $this->belongsTo(Document::class);
    }
}
