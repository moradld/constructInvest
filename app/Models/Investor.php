<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Investor extends Model
{
    protected $fillable = [
        'organization_id',
        'user_id',
        'name',
        'email',
        'phone',
        'address_line1',
        'address_line2',
        'city',
        'state',
        'postal_code',
        'country',
        'status',
        'notes',
    ];

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function performanceSnapshots(): HasMany
    {
        return $this->hasMany(InvestorPerformanceSnapshot::class);
    }

    public function investmentTransactions(): HasMany
    {
        return $this->hasMany(InvestmentTransaction::class);
    }

    public function projectInvestors(): HasMany
    {
        return $this->hasMany(ProjectInvestor::class);
    }

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, 'project_investors')
            ->withPivot(['ownership_percent', 'profit_share_percent', 'status'])
            ->withTimestamps();
    }
}
