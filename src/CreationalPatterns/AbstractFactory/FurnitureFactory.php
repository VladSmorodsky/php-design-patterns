<?php

declare(strict_types=1);

namespace PhpDesignPatterns\CreationalPatterns\AbstractFactory;

interface FurnitureFactory
{
    public function createChair(): Chair;
    public function createSofa(): Sofa;
}