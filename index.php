<?php

require __DIR__ . '/vendor/autoload.php';

use DI\ContainerBuilder;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use WilliamMoura\PriceFii\PriceFii;
use WilliamMoura\PriceFii\Providers\FiisProvider;
use WilliamMoura\PriceFii\Providers\GoogleProvider;


// $provider = new FiisProvider(['key' => '']);
$priceFii = new PriceFii(
    new FiisProvider()
);
$priceFii->getFiiPrice('mxrf11');