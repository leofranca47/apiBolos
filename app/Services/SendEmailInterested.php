<?php

namespace App\Services;

use App\Notifications\WarnInterestedNotification;
use Illuminate\Support\Facades\Notification;

class SendEmailInterested
{
    private $notification;

    public function __construct(Notification $notification)
    {
        $this->notification = $notification;
    }

    public function SendEmailInterested($interestedsList, $cake)
    {
        foreach ($interestedsList as $interested) {
            $this->notification->route('mail', $interested->email)
                ->notify(new WarnInterestedNotification($cake));
        }
    }
}
