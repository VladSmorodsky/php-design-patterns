<?php

declare(strict_types=1);

namespace PhpDesignPatterns\CreationalPatterns\AbstractFactory;

class ModernChair implements Chair
{
    public function sitOn(): string
    {
        return "Sitting on a modern chair.";
    }

    public function hasLegs(): string
    {
        return "This modern chair has no legs.";
    }
}
