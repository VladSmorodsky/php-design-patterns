<?php

declare(strict_types=1);

namespace PhpDesignPatterns\CreationalPatterns\AbstractFactory;

class VictorianFurnitureFactory implements FurnitureFactory
{
    public function createChair(): Chair
    {
        return new VictorianChair();
    }

    public function createSofa(): Sofa
    {
        return new VictorianSofa();
    }
}
