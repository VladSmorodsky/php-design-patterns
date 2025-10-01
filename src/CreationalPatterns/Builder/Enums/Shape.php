<?php

declare(strict_types=1);

namespace PhpDesignPatterns\CreationalPatterns\Builder\Enums;

enum Shape: string
{
    case ROUND = 'round';
    case SQUARE = 'square';
    case RECTANGULAR = 'rectangular';
    case HEART = 'heart';
}
