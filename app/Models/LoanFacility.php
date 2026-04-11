<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LoanFacility extends Model
{
    protected $fillable = [];

    public function facilityProjects(): HasMany
    {
        return $this->hasMany(FacilityProject::class);
    }

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, 'facility_projects')
            ->withPivot(['committed_amount', 'current_balance', 'status'])
            ->withTimestamps();
    }

    public function drawRequests(): HasMany
    {
        return $this->hasMany(DrawRequest::class);
    }
}
