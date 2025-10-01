<?php

declare(strict_types=1);

namespace PhpDesignPatterns\CreationalPatterns\Builder\Enums;

enum Topping: string
{
    case SPRINKLES = 'sprinkles';
    case FRUIT = 'fruit';
    case NUTS = 'nuts';
    case CHOCOLATE_CHIPS = 'chocolate_chips';
    case CANDY = 'candy';
    case BERRIES = 'berries';
    case GOLD_FLAKES = 'gold_flakes';
}
