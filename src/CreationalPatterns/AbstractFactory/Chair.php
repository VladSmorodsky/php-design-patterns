<?php

declare(strict_types=1);

namespace PhpDesignPatterns\CreationalPatterns\AbstractFactory;

interface Chair
{
    public function sitOn(): string;
    public function hasLegs(): string;
}
