<?php

declare(strict_types=1);

namespace CreationalPatterns\FactoryMethod;

use PhpDesignPatterns\CreationalPatterns\FactoryMethod\CarCreator;
use PhpDesignPatterns\CreationalPatterns\FactoryMethod\ShipCreator;
use PhpDesignPatterns\CreationalPatterns\FactoryMethod\TransportCreator;
use PhpDesignPatterns\CreationalPatterns\FactoryMethod\Transport;

require_once __DIR__ . '/../../../vendor/autoload.php';


function describeDeliveryPlan(TransportCreator $creator)
{
    echo $creator->planDelivery() . "\n";
}

describeDeliveryPlan(new CarCreator());
describeDeliveryPlan(new ShipCreator());
