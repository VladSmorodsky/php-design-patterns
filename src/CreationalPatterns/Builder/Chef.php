<?php

declare(strict_types=1);

namespace PhpDesignPatterns\CreationalPatterns\Builder;

use PhpDesignPatterns\CreationalPatterns\Builder\Enums\Flavor;
use PhpDesignPatterns\CreationalPatterns\Builder\Enums\Frosting;
use PhpDesignPatterns\CreationalPatterns\Builder\Enums\Shape;
use PhpDesignPatterns\CreationalPatterns\Builder\Enums\Size;
use PhpDesignPatterns\CreationalPatterns\Builder\Enums\Topping;

final class Chef
{
    public function __construct(private CakeBuilderInterface $builder) {}

    public function makeBirthdayCake(string $name, int $age): Cake
    {
        return $this->builder
            ->reset()
            ->setSize(Size::LARGE)
            ->setShape(Shape::ROUND)
            ->addLayer(Flavor::VANILLA)
            ->addLayer(Flavor::CHOCOLATE)
            ->setFrosting(Frosting::BUTTERCREAM)
            ->addFilling(Flavor::VANILLA)
            ->addTopping(Topping::SPRINKLES)
            ->writeMessage("Happy Birthday, $name!")
            ->setCandles($age)
            ->build();
    }

    public function makeWeddingCake(): Cake
    {
        return $this->builder
            ->reset()
            ->setSize(Size::LARGE)
            ->setShape(Shape::HEART)
            ->addLayer(Flavor::RED_VELVET)
            ->addLayer(Flavor::RED_VELVET)
            ->addLayer(Flavor::RED_VELVET)
            ->setFrosting(Frosting::CREAM_CHEESE)
            ->addTopping(Topping::GOLD_FLAKES)
            ->writeMessage("Congratulations!")
            ->build();
    }

    public function makeLightSummerCake(): Cake
    {
        return $this->builder
            ->reset()
            ->setSize(Size::MEDIUM)
            ->setShape(Shape::ROUND)
            ->addLayer(Flavor::LEMON)
            ->setFrosting(Frosting::WHIPPED_CREAM)
            ->addTopping(Topping::BERRIES)
            ->addTopping(Topping::FRUIT)
            ->build();
    }
}
