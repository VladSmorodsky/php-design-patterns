<?php

declare(strict_types=1);

namespace PhpDesignPatterns\CreationalPatterns\Builder;

use PhpDesignPatterns\CreationalPatterns\Builder\Enums\Flavor;
use PhpDesignPatterns\CreationalPatterns\Builder\Enums\Frosting;
use PhpDesignPatterns\CreationalPatterns\Builder\Enums\Shape;
use PhpDesignPatterns\CreationalPatterns\Builder\Enums\Size;

final class Cake
{
    public function __construct(
        public readonly Size   $size,
        public readonly Shape  $shape,
        /** @var list<Flavor> */
        public readonly array  $layers,
        public readonly ?Frosting $frosting,
        /** @var list<Flavor> fillings between layers (optional) */
        public readonly array  $fillings,
        /** @var list<Topping> */
        public readonly array  $toppings,
        public readonly ?string $message,
        public readonly int     $candlesCount
    ) {}

    public function __toString(): string
    {
        $layers = implode(', ', array_map(fn($f) => $f->value, $this->layers));
        $fills  = $this->fillings ? implode(', ', array_map(fn($f) => $f->value, $this->fillings)) : 'none';
        $tops   = $this->toppings ? implode(', ', array_map(fn($t) => $t->value, $this->toppings)) : 'none';
        $msg    = $this->message ?? '—';
        return "Cake {$this->size->value} {$this->shape->value} | layers: [$layers] | frosting: " . ($this->frosting?->value ?? 'none')
            . " | fillings: [$fills] | toppings: [$tops] | message: \"$msg\" | candles: {$this->candlesCount}";
    }
}
