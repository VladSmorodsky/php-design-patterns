<?php

declare(strict_types=1);

namespace PhpDesignPatterns\CreationalPatterns\AbstractFactory;

class VictorianChair implements Chair
{
    public function sitOn(): string
    {
        return 'Sitting on a Victorian chair.';
    }

    public function hasLegs(): string
    {
        return 'This Victorian chair has 4 ornate legs.';
    }
}