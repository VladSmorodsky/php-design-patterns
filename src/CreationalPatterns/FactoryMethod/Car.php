<?php

declare(strict_types=1);

namespace PhpDesignPatterns\CreationalPatterns\FactoryMethod;

class Car implements Transport
{
    public function deliver(): string
    {
        return 'Deliver by land in a box';
    }
}
