<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BudgetDivision extends Model
{
    protected $fillable = [
        'project_id',
        'code',
        'name',
        'sort_order',
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function budgetItems(): HasMany
    {
        return $this->hasMany(BudgetItem::class);
    }

    public function drawRequestAllocations(): HasMany
    {
        return $this->hasMany(DrawRequestAllocation::class);
    }
}
