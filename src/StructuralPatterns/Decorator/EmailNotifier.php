<?php

declare(strict_types=1);

namespace PhpDesignPatterns\StructuralPatterns\Decorator;

class EmailNotifier implements NotifierInterface
{
    public function __construct(private readonly string $fromAddress = 'no-reply@example.com') {}

    public function send(Notification $notification): void
    {
        // Simulate sending an email
        echo "Sending Email from {$this->fromAddress} to {$notification->to} with subject '{$notification->subject}' and body '{$notification->body}'." . PHP_EOL;
    }
}
