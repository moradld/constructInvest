<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    protected $fillable = [
        'organization_id',
        'code',
        'name',
        'description',
        'location_name',
        'asset_type',
        'status',
        'completion_percent',
        'projected_completion_date',
    ];

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }

    public function projectUsers(): HasMany
    {
        return $this->hasMany(ProjectUser::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'project_users')
            ->withPivot('role')
            ->withTimestamps();
    }

    public function budgetDivisions(): HasMany
    {
        return $this->hasMany(BudgetDivision::class);
    }

    public function budgetItems(): HasMany
    {
        return $this->hasMany(BudgetItem::class);
    }

    public function projectTasks(): HasMany
    {
        return $this->hasMany(ProjectTask::class);
    }

    public function projectContracts(): HasMany
    {
        return $this->hasMany(ProjectContract::class);
    }

    public function contractorInvoices(): HasMany
    {
        return $this->hasMany(ContractorInvoice::class);
    }

    public function projectInvestors(): HasMany
    {
        return $this->hasMany(ProjectInvestor::class);
    }

    public function investors(): BelongsToMany
    {
        return $this->belongsToMany(Investor::class, 'project_investors')
            ->withPivot(['ownership_percent', 'profit_share_percent', 'status'])
            ->withTimestamps();
    }

    public function investmentTransactions(): HasMany
    {
        return $this->hasMany(InvestmentTransaction::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    public function drawRequests(): HasMany
    {
        return $this->hasMany(DrawRequest::class);
    }

    public function documentFolders(): HasMany
    {
        return $this->hasMany(DocumentFolder::class);
    }

    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }

    public function projectRisks(): HasMany
    {
        return $this->hasMany(ProjectRisk::class);
    }

    public function deals(): HasMany
    {
        return $this->hasMany(Deal::class);
    }

    public function facilityProjects(): HasMany
    {
        return $this->hasMany(FacilityProject::class);
    }

    public function loanFacilities(): BelongsToMany
    {
        return $this->belongsToMany(LoanFacility::class, 'facility_projects')
            ->withPivot(['committed_amount', 'current_balance', 'status'])
            ->withTimestamps();
    }
}
