<?php

declare(strict_types=1);

namespace PhpDesignPatterns\CreationalPatterns\FactoryMethod;

class ShipCreator extends TransportCreator
{
    public function createTransport(): Transport
    {
        return new Ship();
    }
}
