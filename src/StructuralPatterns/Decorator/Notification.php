<?php

declare(strict_types=1);

namespace PhpDesignPatterns\StructuralPatterns\Decorator;

final class Notification
{
    public function __construct(
        public readonly string $to,
        public readonly string $subject,
        public readonly string $body,
        public readonly array  $meta = []
    ) {}
}
