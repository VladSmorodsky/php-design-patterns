<?php

declare(strict_types=1);

namespace PhpDesignPatterns\StructuralPatterns\Decorator;

abstract class AbstractNotifierDecorator implements NotifierInterface
{
    public function __construct(protected NotifierInterface $nextNotifier) {}

    public function send(Notification $notification): void
    {
        $this->nextNotifier->send($notification);
    }
}
