<?php

declare(strict_types=1);

namespace PhpDesignPatterns\BehavioralPatterns\Strategy;



require_once __DIR__ . '/../../../vendor/autoload.php';

$navigator = new Navigator(new RoadStrategy());
echo "Client: Strategy is set to Road\n";
echo $navigator->buildRoute('Point A', 'Point B');

echo "\n";

echo "Client: Strategy is set to Walk\n";
$navigator->setRouteStrategy(new WalkStrategy());
echo $navigator->buildRoute('Point A', 'Point B');
