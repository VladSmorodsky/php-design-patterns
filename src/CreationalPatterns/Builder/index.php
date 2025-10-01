<?php

declare(strict_types=1);

namespace PhpDesignPatterns\CreationalPatterns\Builder;

use PhpDesignPatterns\CreationalPatterns\Builder\Enums\Flavor;
use PhpDesignPatterns\CreationalPatterns\Builder\Enums\Frosting;
use PhpDesignPatterns\CreationalPatterns\Builder\Enums\Shape;
use PhpDesignPatterns\CreationalPatterns\Builder\Enums\Size;
use PhpDesignPatterns\CreationalPatterns\Builder\Enums\Topping;
use PhpDesignPatterns\CreationalPatterns\Builder\BaseCakeBuilder;
use PhpDesignPatterns\CreationalPatterns\Builder\Chef;

require_once __DIR__ . '/../../../vendor/autoload.php';

$builder = new BaseCakeBuilder();
$chef = new Chef($builder);

// Predefined recipes (Director)
$birthday = $chef->makeBirthdayCake('Vlad', 29);
$wedding  = $chef->makeWeddingCake();

// Custom build (Client drives the builder directly)
$custom = $builder
    ->reset()
    ->setSize(Size::SMALL)
    ->setShape(Shape::SQUARE)
    ->addLayer(Flavor::CHOCOLATE)
    ->setFrosting(Frosting::GANACHE)
    ->addTopping(Topping::NUTS)
    ->writeMessage('For Devs ❤️')
    ->build();

echo $birthday . PHP_EOL;
echo $wedding . PHP_EOL;
echo $custom . PHP_EOL;
