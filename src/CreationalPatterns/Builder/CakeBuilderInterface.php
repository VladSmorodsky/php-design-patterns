<?php

declare(strict_types=1);

namespace PhpDesignPatterns\CreationalPatterns\Builder;

use PhpDesignPatterns\CreationalPatterns\Builder\Enums\Flavor;
use PhpDesignPatterns\CreationalPatterns\Builder\Enums\Frosting;
use PhpDesignPatterns\CreationalPatterns\Builder\Enums\Shape;
use PhpDesignPatterns\CreationalPatterns\Builder\Enums\Size;
use PhpDesignPatterns\CreationalPatterns\Builder\Enums\Topping;

interface CakeBuilderInterface
{
    public function reset(): self;
    public function addLayer(Flavor $flavor): self;
    public function setSize(Size $size): self;
    public function setFrosting(Frosting $frosting): self;
    public function setShape(Shape $shape): self;
    public function addFilling(Flavor $flavor): self;
    public function addTopping(Topping $topping): self;
    public function writeMessage(string $message): self;
    public function setCandles(int $count): self;
    public function build(): Cake;
}
