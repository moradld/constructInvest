<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DealBankAccount extends Model
{
    protected $fillable = [
        'deal_id',
        'bank_name',
        'account_name',
        'account_last4',
        'routing_last4',
        'plaid_item_id',
        'status',
    ];

    public function deal(): BelongsTo
    {
        return $this->belongsTo(Deal::class);
    }
}
