<?php
declare(strict_types=1);

namespace WilliamMoura\PriceFii\Models;

class Fii
{
    public function __construct(
        public string $fiiCode,
        public float $price
    ) {}
}