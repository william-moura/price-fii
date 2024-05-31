<?php

namespace WilliamMoura\PriceFii\Contracts;

use WilliamMoura\PriceFii\Models\Fii;
interface ProviderInterface
{    
    public function getFii(string $fiiCode): Fii;
    public function getFiiPrice(string $fiiCode): float;
}