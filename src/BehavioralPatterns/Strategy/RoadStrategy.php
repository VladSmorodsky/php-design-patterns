<?php

declare(strict_types=1);

namespace PhpDesignPatterns\BehavioralPatterns\Strategy;

class RoadStrategy implements RouteStrategyInterface
{
    public function buildRoute(string $start, string $end): string
    {
        return "Building road route from {$start} to {$end}";
    }
}
