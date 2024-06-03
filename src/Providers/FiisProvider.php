<?php
declare(strict_types=1);

namespace WilliamMoura\PriceFii\Providers;

use WilliamMoura\PriceFii\Contracts\ProviderInterface;
use WilliamMoura\PriceFii\Models\Fii;

class FiisProvider extends AbstractProvider implements ProviderInterface
{

    protected string $url = 'https://fiis.com.br/';

    public function getFii(string $fiiCode): Fii
    {
        return new $this->model($fiiCode, $this->getFiiPrice($fiiCode));
    }

    public function getFiiPrice(string $fiiCode): float
    {        
        $content = $this->get($fiiCode);
        $dom = new \DOMDocument();
        @$dom->loadHTML($content);
        $xpath = new \DOMXPath($dom);
        $price = $xpath->query('//div[@id="carbon_fields_fiis_quotations_chart-2"] //span[@class="value"]')->item(0)->nodeValue;

        return $this->parceFloat($price);        
    }

}