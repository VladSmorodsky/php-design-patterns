<?php

declare(strict_types=1);

namespace PhpDesignPatterns\CreationalPatterns\FactoryMethod;

abstract class TransportCreator
{
    abstract public function createTransport(): Transport;

    public function planDelivery(): string
    {
        $transport = $this->createTransport();
        return $transport->deliver();
    }
}
