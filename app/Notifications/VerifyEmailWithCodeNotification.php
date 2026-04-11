<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class VerifyEmailWithCodeNotification extends Notification
{
    use Queueable;

    public function __construct(
        public readonly string $code,
        public readonly ?string $verificationUrl = null,
        public readonly int $expiresMinutes = 10,
    ) {
    }

    /**
     * @param  mixed  $notifiable
     */
    public function via($notifiable): array
    {
        return ['mail'];
    }

    /**
     * @param  mixed  $notifiable
     */
    public function toMail($notifiable): MailMessage
    {
        $mail = (new MailMessage)
            ->subject('Verify your email address')
            ->greeting('Please check your email')
            ->line('Use the verification code below to verify your email address:')
            ->line('Verification code: '.$this->code)
            ->line('This code expires in '.$this->expiresMinutes.' minutes.');

        if ($this->verificationUrl) {
            $mail->line('Alternatively, you can verify by clicking this link:')
                ->action('Verify Email', $this->verificationUrl);
        }

        return $mail;
    }
}
