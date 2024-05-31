<?php

namespace WilliamMoura\PriceFii\Contracts;

interface FiiInterface
{
    public function getFiiPrice(string $fiiCode): float;
}