<?php

declare(strict_types=1);

namespace PhpDesignPatterns\BehavioralPatterns\Strategy;

use PhpDesignPatterns\BehavioralPatterns\Strategy\RouteStrategyInterface;

class Navigator
{
    public function __construct(private RouteStrategyInterface $routeStrategy) {}

    public function setRouteStrategy(RouteStrategyInterface $routeStrategy): void
    {
        $this->routeStrategy = $routeStrategy;
    }

    public function buildRoute(string $start, string $end): string
    {
        return $this->routeStrategy->buildRoute($start, $end);
    }
}