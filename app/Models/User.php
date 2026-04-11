<?php

namespace App\Models;

use App\Notifications\VerifyEmailWithCodeNotification;
use Illuminate\Auth\MustVerifyEmail as MustVerifyEmailTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable, MustVerifyEmailTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'organization_id',
        'name',
        'email',
        'password',
        'professional_role',
        'company_name',
        'avatar_path',
        'notify_email',
        'notify_push',
        'notify_sms',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }

    public function connectedAccounts(): HasMany
    {
        return $this->hasMany(ConnectedAccount::class);
    }

    public function socialAccounts(): HasMany
    {
        return $this->hasMany(UserSocialAccouns::class);
    }

    public function emailVerificationCodes(): HasMany
    {
        return $this->hasMany(EmailVerificationCode::class);
    }

    public function sendEmailVerificationNotification(): void
    {
        $code = (string) random_int(100000, 999999);

        $record = EmailVerificationCode::query()
            ->where('user_id', $this->id)
            ->whereNull('consumed_at')
            ->latest('id')
            ->first();

        if (!$record) {
            $record = new EmailVerificationCode(['user_id' => $this->id]);
            $record->resend_count = 0;
        } else {
            $record->resend_count = (int) $record->resend_count + 1;
        }

        $record->code_hash = Hash::make($code);
        $record->expires_at = now()->addMinutes(10);
        $record->last_sent_at = now();
        $record->save();

        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            ['id' => $this->getKey(), 'hash' => sha1($this->getEmailForVerification())]
        );

        $this->notify(new VerifyEmailWithCodeNotification($code, $verificationUrl, 10));
    }

    public function investors(): HasMany
    {
        return $this->hasMany(Investor::class);
    }

    public function projectUsers(): HasMany
    {
        return $this->hasMany(ProjectUser::class);
    }

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class, 'project_users')
            ->withPivot('role')
            ->withTimestamps();
    }

    public function uploadedDocuments(): HasMany
    {
        return $this->hasMany(Document::class, 'uploaded_by_user_id');
    }

    public function documentActivities(): HasMany
    {
        return $this->hasMany(DocumentActivity::class, 'actor_user_id');
    }

    public function documentUserAccesses(): HasMany
    {
        return $this->hasMany(DocumentUserAccess::class);
    }

    public function grantedDocumentUserAccesses(): HasMany
    {
        return $this->hasMany(DocumentUserAccess::class, 'granted_by_user_id');
    }

    public function documents(): BelongsToMany
    {
        return $this->belongsToMany(Document::class, 'document_user_accesses')
            ->withPivot(['role', 'granted_by_user_id', 'granted_at'])
            ->withTimestamps();
    }

    public function dealAgreementAcknowledgements(): HasMany
    {
        return $this->hasMany(DealAgreementAcknowledgement::class);
    }

    public function dealsCreated(): HasMany
    {
        return $this->hasMany(Deal::class, 'created_by_user_id');
    }

    public function paymentsCreated(): HasMany
    {
        return $this->hasMany(Payment::class, 'created_by_user_id');
    }

    public function reportsGenerated(): HasMany
    {
        return $this->hasMany(Report::class, 'generated_by_user_id');
    }

    public function drawRequestsRequested(): HasMany
    {
        return $this->hasMany(DrawRequest::class, 'requested_by_user_id');
    }

    public function drawRequestsApproved(): HasMany
    {
        return $this->hasMany(DrawRequest::class, 'approved_by_user_id');
    }

    public function drawRequestStatusHistories(): HasMany
    {
        return $this->hasMany(DrawRequestStatusHistory::class, 'actor_user_id');
    }
}
