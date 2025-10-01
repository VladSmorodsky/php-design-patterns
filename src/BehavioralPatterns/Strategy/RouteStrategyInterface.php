<?php

declare(strict_types=1);

namespace PhpDesignPatterns\BehavioralPatterns\Strategy;

interface RouteStrategyInterface
{
    public function buildRoute(string $start, string $end): string;
}
