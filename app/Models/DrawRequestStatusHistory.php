<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DrawRequestStatusHistory extends Model
{
    protected $fillable = [
        'draw_request_id',
        'status',
        'actor_user_id',
        'occurred_at',
        'meta',
    ];

    public function drawRequest(): BelongsTo
    {
        return $this->belongsTo(DrawRequest::class);
    }

    public function actorUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'actor_user_id');
    }
}
