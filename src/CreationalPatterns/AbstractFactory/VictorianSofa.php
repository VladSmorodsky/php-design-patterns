<?php

declare(strict_types=1);

namespace PhpDesignPatterns\CreationalPatterns\AbstractFactory;

class VictorianSofa implements Sofa
{
    public function lieOn(): string
    {
        return 'You are lying on a Victorian sofa.';
    }

    public function hasCushions(): string
    {
        return 'This Victorian sofa has plush cushions.';
    }
}
