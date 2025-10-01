<?php

declare(strict_types=1);

namespace PhpDesignPatterns\CreationalPatterns\Builder\Enums;

enum Frosting: string
{
    case BUTTERCREAM = 'buttercream';
    case FONDANT = 'fondant';
    case WHIPPED_CREAM = 'whipped_cream';
    case CREAM_CHEESE = 'cream_cheese';
    case GANACHE = 'ganache';
}
