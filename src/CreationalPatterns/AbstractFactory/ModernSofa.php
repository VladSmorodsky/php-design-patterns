<?php

declare(strict_types=1);

namespace PhpDesignPatterns\CreationalPatterns\AbstractFactory;

class ModernSofa implements Sofa
{
    public function lieOn(): string
    {
        return "You are lying on a modern sofa.";
    }

    public function hasCushions(): string
    {
        return "This modern sofa has no cushions.";
    }
}
