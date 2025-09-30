<?php

declare(strict_types=1);

namespace PhpDesignPatterns\CreationalPatterns\FactoryMethod;

class Ship implements Transport
{
    public function deliver(): string
    {
        return 'Deliver by sea in a container';
    }
}
