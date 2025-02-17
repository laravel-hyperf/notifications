<?php

declare(strict_types=1);

namespace LaravelHyperf\Notifications\Events;

use LaravelHyperf\Notifications\Notification;

class NotificationFailed
{
    /**
     * Create a new event instance.
     */
    public function __construct(
        public mixed $notifiable,
        public Notification $notification,
        public string $channel,
        public array $data = []
    ) {
    }
}
