<?php

namespace WilliamMoura\PriceFii;
use WilliamMoura\PriceFii\Contracts\FiiInterface;
use WilliamMoura\PriceFii\Contracts\ProviderInterface;

class PriceFii implements FiiInterface
{
    public function __construct(private ProviderInterface $provider)
    {

    }
    public function getFiiPrice(string $fiiCode): float
    {
        $response = $this->provider->getFii($fiiCode);
        return $response->getPrice();
    }
}