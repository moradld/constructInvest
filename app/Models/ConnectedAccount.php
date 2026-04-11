<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ConnectedAccount extends Model
{
    protected $fillable = [
        'user_id',
        'provider',
        'status',
        'external_id',
        'access_token',
        'refresh_token',
        'expires_at',
        'meta',
        'connected_at',
        'disconnected_at',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
