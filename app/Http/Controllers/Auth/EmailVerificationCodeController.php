<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\EmailVerificationCode;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmailVerificationCodeController extends Controller
{
    public function verify(Request $request): RedirectResponse
    {
        $request->validate([
            'code' => ['required', 'digits:6'],
        ]);

        $user = $request->user();

        if ($user->hasVerifiedEmail()) {
            return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
        }

        $verificationCode = EmailVerificationCode::query()
            ->where('user_id', $user->id)
            ->whereNull('consumed_at')
            ->where('expires_at', '>=', now())
            ->latest('id')
            ->first();

        if (!$verificationCode || !Hash::check($request->string('code')->toString(), $verificationCode->code_hash)) {
            return back()->withErrors([
                'code' => 'The verification code is invalid or has expired.',
            ])->onlyInput('code');
        }

        $verificationCode->forceFill([
            'consumed_at' => now(),
        ])->save();

        if (!$user->hasVerifiedEmail()) {
            $user->markEmailAsVerified();
            event(new Verified($user));
        }

        return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
    }
}
