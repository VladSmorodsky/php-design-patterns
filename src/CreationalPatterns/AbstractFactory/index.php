<?php

declare(strict_types=1);

namespace PhpDesignPatterns\CreationalPatterns\FactoryMethod;

use PhpDesignPatterns\CreationalPatterns\AbstractFactory\FurnitureFactory;
use PhpDesignPatterns\CreationalPatterns\AbstractFactory\ModernFurnitureFactory;
use PhpDesignPatterns\CreationalPatterns\AbstractFactory\VictorianFurnitureFactory;

require_once __DIR__ . '/../../../vendor/autoload.php';

function createFurniture(
    FurnitureFactory $factory
): void {
    $chair = $factory->createChair();
    echo $chair->sitOn() . "\n";
    echo $chair->hasLegs() . "\n";

    $sofa = $factory->createSofa();
    echo $sofa->lieOn() . "\n";
    echo $sofa->hasCushions() . "\n";
}

createFurniture(new ModernFurnitureFactory());
createFurniture(new VictorianFurnitureFactory());
