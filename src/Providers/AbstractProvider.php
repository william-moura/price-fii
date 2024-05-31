<?php

namespace WilliamMoura\PriceFii\Providers;
use GuzzleHttp\ClientInterface;
use WilliamMoura\PriceFii\Contracts\ProviderInterface;
use GuzzleHttp\Client;
use WilliamMoura\PriceFii\Models\Fii;

abstract class AbstractProvider implements ProviderInterface
{
    protected $name;
    protected $config;
    protected string $url;
    protected ClientInterface $client;
    protected Fii $model;
    
    public function __construct()
    {
        $this->client = new Client();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    protected function get(string $fiiCode): string
    {
        $response = $this->client->request('GET', $this->url . $fiiCode);
        return $response->getBody()->getContents();
    }

    abstract function getFii(string $fiiCode): Fii;

    abstract public function getFiiPrice(string $fiiCode): float;
}