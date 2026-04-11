<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ContractorInvoice extends Model
{
    protected $fillable = [
        'project_id',
        'contractor_id',
        'project_contract_id',
        'invoice_number',
        'amount',
        'status',
        'issued_at',
        'due_at',
        'notes',
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function contractor(): BelongsTo
    {
        return $this->belongsTo(Contractors::class, 'contractor_id');
    }

    public function projectContract(): BelongsTo
    {
        return $this->belongsTo(ProjectContract::class);
    }

    public function contractorInvoiceDocuments(): HasMany
    {
        return $this->hasMany(ContractorInvoiceDocument::class);
    }

    public function documents(): BelongsToMany
    {
        return $this->belongsToMany(Document::class, 'contractor_invoice_documents')
            ->withTimestamps();
    }
}
