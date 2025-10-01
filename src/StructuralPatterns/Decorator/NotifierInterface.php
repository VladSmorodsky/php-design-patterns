<?php

declare(strict_types=1);

namespace PhpDesignPatterns\StructuralPatterns\Decorator;

interface NotifierInterface
{
    public function send(Notification $notification): void;
}
