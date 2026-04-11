<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Document extends Model
{
    protected $fillable = [
        'organization_id',
        'project_id',
        'folder_id',
        'uploaded_by_user_id',
        'name',
        'original_name',
        'file_ext',
        'mime_type',
        'size_bytes',
        'disk',
        'path',
        'tag',
        'status',
    ];

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function folder(): BelongsTo
    {
        return $this->belongsTo(DocumentFolder::class, 'folder_id');
    }

    public function uploadedByUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'uploaded_by_user_id');
    }

    public function activities(): HasMany
    {
        return $this->hasMany(DocumentActivity::class);
    }

    public function userAccesses(): HasMany
    {
        return $this->hasMany(DocumentUserAccess::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'document_user_accesses')
            ->withPivot(['role', 'granted_by_user_id', 'granted_at'])
            ->withTimestamps();
    }

    public function budgetItemAttachments(): HasMany
    {
        return $this->hasMany(BudgetItemAttachment::class);
    }

    public function contractorInvoiceDocuments(): HasMany
    {
        return $this->hasMany(ContractorInvoiceDocument::class);
    }

    public function contractorInvoices(): BelongsToMany
    {
        return $this->belongsToMany(ContractorInvoice::class, 'contractor_invoice_documents')
            ->withTimestamps();
    }

    public function drawRequestDocuments(): HasMany
    {
        return $this->hasMany(DrawRequestDocument::class);
    }

    public function drawRequests(): BelongsToMany
    {
        return $this->belongsToMany(DrawRequest::class, 'draw_request_documents')
            ->withTimestamps();
    }

    public function contractorComplianceItems(): HasMany
    {
        return $this->hasMany(ContractorComplianceItem::class);
    }

    public function dealAgreements(): HasMany
    {
        return $this->hasMany(DealAgreement::class, 'document_id');
    }

    public function signedDealAgreements(): HasMany
    {
        return $this->hasMany(DealAgreement::class, 'signed_document_id');
    }
}
