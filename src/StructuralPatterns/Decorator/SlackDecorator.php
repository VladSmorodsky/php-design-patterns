<?php

declare(strict_types=1);

namespace PhpDesignPatterns\StructuralPatterns\Decorator;

final class SlackDecorator extends AbstractNotifierDecorator
{
    public function __construct(NotifierInterface $nextNotifier, private readonly string $channel = '#general')
    {
        parent::__construct($nextNotifier);
    }

    public function send(Notification $notification): void
    {
        parent::send($notification);

        // Simulate sending a Slack message
        echo "Sending Slack message to {$this->channel} with body '{$notification->body}'." . PHP_EOL;
    }
}
