<?php

namespace WilliamMoura\PriceFii\Providers;
use WilliamMoura\PriceFii\Contracts\ProviderInterface;

class GoogleProvider extends AbstractProvider implements ProviderInterface
{
    protected string $url = 'https://www.google.com/search?q=';
    public function get(string $fiiCode): float
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $this->url . $fiiCode);        
        return 0.1;
    }
}