<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Organization extends Model
{
    protected $fillable = [
        'name',
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function investors(): HasMany
    {
        return $this->hasMany(Investor::class);
    }

    public function contractors(): HasMany
    {
        return $this->hasMany(Contractors::class);
    }

    public function lenders(): HasMany
    {
        return $this->hasMany(Lender::class);
    }

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }

    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    public function reports(): HasMany
    {
        return $this->hasMany(Report::class);
    }

    public function deals(): HasMany
    {
        return $this->hasMany(Deal::class);
    }

    public function drawRequests(): HasMany
    {
        return $this->hasMany(DrawRequest::class);
    }
}
