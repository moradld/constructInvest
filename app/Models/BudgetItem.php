<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BudgetItem extends Model
{
    protected $fillable = [
        'project_id',
        'budget_division_id',
        'detail_name',
        'budget_amount',
        'actual_cost',
        'budget_cost_per_sf',
        'actual_cost_per_sf',
        'draw_date',
        'actual_date',
        'start_date',
        'end_date',
        'task_completion_percent',
        'payor_name',
        'payment_status',
        'pay_status',
        'change_order_number',
        'state',
        'short_project_note',
        'notes',
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function budgetDivision(): BelongsTo
    {
        return $this->belongsTo(BudgetDivision::class);
    }

    public function attachments(): HasMany
    {
        return $this->hasMany(BudgetItemAttachment::class);
    }

    public function documents(): BelongsToMany
    {
        return $this->belongsToMany(Document::class, 'budget_item_attachments')
            ->withTimestamps();
    }

    public function drawRequestAllocations(): HasMany
    {
        return $this->hasMany(DrawRequestAllocation::class);
    }
}
