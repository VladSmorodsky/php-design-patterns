<?php

declare(strict_types=1);

namespace PhpDesignPatterns\CreationalPatterns\Builder\Enums;

enum Flavor: string
{
    case VANILLA = 'vanilla';
    case CHOCOLATE = 'chocolate';
    case RED_VELVET = 'red_velvet';
    case LEMON = 'lemon';
    case CARROT = 'carrot';
}