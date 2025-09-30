<?php

declare(strict_types=1);

namespace PhpDesignPatterns\CreationalPatterns\AbstractFactory;

interface Sofa
{
    public function lieOn(): string;
    public function hasCushions(): string;
}