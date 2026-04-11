<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contractors extends Model
{
    protected $fillable = [
        'organization_id',
        'name',
        'type',
        'work_type',
        'contact_name',
        'email',
        'phone',
        'address_line1',
        'address_line2',
        'city',
        'state',
        'postal_code',
        'country',
        'status',
    ];

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }

    public function complianceItems(): HasMany
    {
        return $this->hasMany(ContractorComplianceItem::class, 'contractor_id');
    }

    public function projectContracts(): HasMany
    {
        return $this->hasMany(ProjectContract::class, 'contractor_id');
    }

    public function invoices(): HasMany
    {
        return $this->hasMany(ContractorInvoice::class, 'contractor_id');
    }
}
