<?php

declare(strict_types=1);

namespace PhpDesignPatterns\StructuralPatterns\Decorator;

final class SmsDecorator extends AbstractNotifierDecorator
{
    public function __construct(NotifierInterface $nextNotifier, private readonly string $fromNumber = '+10000000000')
    {
        parent::__construct($nextNotifier);
    }

    public function send(Notification $notification): void
    {
        parent::send($notification);

        // Simulate sending an SMS
        echo "Sending SMS from {$this->fromNumber} to {$notification->to} with body '{$notification->body}'." . PHP_EOL;
    }
}
