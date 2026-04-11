<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Deal extends Model
{
    protected $fillable = [
        'organization_id',
        'created_by_user_id',
        'project_id',
        'property_name',
        'property_address',
        'property_price',
        'rehab_budget',
        'arv',
        'profit_margin_percent',
        'net_profit',
        'estimated_costs',
        'rule_70_percent',
        'max_purchase',
        'offer',
        'difference',
        'risk_level',
        'deal_grade',
        'potential_roi_percent',
        'qualified',
        'current_step',
        'status',
    ];

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }

    public function createdByUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_user_id');
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function bankAccounts(): HasMany
    {
        return $this->hasMany(DealBankAccount::class);
    }

    public function agreements(): HasMany
    {
        return $this->hasMany(DealAgreement::class);
    }
}
