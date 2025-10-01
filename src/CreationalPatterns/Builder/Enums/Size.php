<?php

declare(strict_types=1);

namespace PhpDesignPatterns\CreationalPatterns\Builder\Enums;

enum Size: string
{
    case SMALL = 'small';
    case MEDIUM = 'medium';
    case LARGE = 'large';
}
