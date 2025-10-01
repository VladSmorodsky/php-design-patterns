<?php

declare(strict_types=1);

namespace PhpDesignPatterns\BehavioralPatterns\Strategy;

class ShipStrategy implements RouteStrategyInterface
{
    public function buildRoute(string $start, string $end): string
    {
        return "Building ship route from {$start} to {$end}";
    }
}
