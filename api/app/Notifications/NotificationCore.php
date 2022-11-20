<?php

namespace App\Notifications;

use App\Notifications\Channels\DatabaseChannel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Queue\SerializesModels;

abstract class NotificationCore extends Notification implements ShouldQueue
{
    use Queueable, SerializesModels;

    public array $channels = [] ;

    public function via($notifiable) : array
    {
        return [ DatabaseChannel::class ,...$this->channels ];
    }

    public function backoff(): array
    {
        return [ 3, 5, 10] ; // if notification fail try after [] seconds
    }

}
