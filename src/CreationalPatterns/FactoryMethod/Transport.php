<?php

declare(strict_types=1);

namespace PhpDesignPatterns\CreationalPatterns\FactoryMethod;

interface Transport
{
    public function deliver(): string;
}

