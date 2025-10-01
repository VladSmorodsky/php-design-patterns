<?php

declare(strict_types=1);

namespace PhpDesignPatterns\BehavioralPatterns\Strategy;

class WalkStrategy implements RouteStrategyInterface
{
    public function buildRoute(string $start, string $end): string
    {
        return "Building walking route from {$start} to {$end}";
    }
}
