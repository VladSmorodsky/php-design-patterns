<?php

declare(strict_types=1);

namespace PhpDesignPatterns\CreationalPatterns\Builder;

use PhpDesignPatterns\CreationalPatterns\Builder\Enums\Size;
use PhpDesignPatterns\CreationalPatterns\Builder\Enums\Shape;
use PhpDesignPatterns\CreationalPatterns\Builder\Enums\Frosting;
use PhpDesignPatterns\CreationalPatterns\Builder\Enums\Flavor;
use PhpDesignPatterns\CreationalPatterns\Builder\Enums\Topping;

final class BaseCakeBuilder implements CakeBuilderInterface
{
    public function __construct(
        private Size $size = Size::MEDIUM,
        private Shape $shape = Shape::ROUND,
        /** @var list<Flavor> */
        private array $layers = [],
        private ?Frosting $frosting = null,
        /** @var list<Flavor> */
        private array $fillings = [],
        /** @var list<Topping> */
        private array $toppings = [],
        private ?string $message = null,
        private int $candles = 0,
    ) {
        $this->reset();
    }

    public function reset(): self
    {
        $this->size = Size::MEDIUM;
        $this->shape = Shape::ROUND;
        $this->layers = [];
        $this->frosting = null;
        $this->fillings = [];
        $this->toppings = [];
        $this->message = null;
        $this->candles = 0;

        return $this;
    }

    public function setSize(Size $size): self
    {
        $this->size = $size;
        return $this;
    }

    public function setShape(Shape $shape): self
    {
        $this->shape = $shape;
        return $this;
    }

    public function addLayer(Flavor $flavor): self
    {
        $this->layers[] = $flavor;
        return $this;
    }

    public function setFrosting(Frosting $frosting): self
    {
        $this->frosting = $frosting;
        return $this;
    }

    public function addFilling(Flavor $flavor): self
    {
        $this->fillings[] = $flavor;
        return $this;
    }

    public function addTopping(Topping $topping): self
    {
        $this->toppings[] = $topping;
        return $this;
    }

    public function writeMessage(string $text): self
    {
        $this->message = $text;
        return $this;
    }

    public function setCandles(int $count): self
    {
        $this->candles = max(0, $count);
        return $this;
    }

    public function build(): Cake
    {
        if (empty($this->layers)) {
            throw new \LogicException('Cannot build a cake without layers.');
        }

        $cake = new Cake(
            size: $this->size,
            shape: $this->shape,
            layers: $this->layers,
            frosting: $this->frosting,
            fillings: $this->fillings,
            toppings: $this->toppings,
            message: $this->message,
            candlesCount: $this->candles
        );
        $this->reset();

        return $cake;
    }
}
