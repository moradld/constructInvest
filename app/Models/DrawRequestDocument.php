<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DrawRequestDocument extends Model
{
    protected $fillable = [
        'draw_request_id',
        'document_id',
    ];

    public function drawRequest(): BelongsTo
    {
        return $this->belongsTo(DrawRequest::class);
    }

    public function document(): BelongsTo
    {
        return $this->belongsTo(Document::class);
    }
}
