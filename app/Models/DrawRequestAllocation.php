<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DrawRequestAllocation extends Model
{
    protected $fillable = [
        'draw_request_id',
        'budget_division_id',
        'budget_item_id',
        'allocated_amount',
        'notes',
    ];

    public function drawRequest(): BelongsTo
    {
        return $this->belongsTo(DrawRequest::class);
    }

    public function budgetDivision(): BelongsTo
    {
        return $this->belongsTo(BudgetDivision::class);
    }

    public function budgetItem(): BelongsTo
    {
        return $this->belongsTo(BudgetItem::class);
    }
}
