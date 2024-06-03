# price-fii
get last price fundos de investimentos imobiliários.


#### Useage Example:  
```php
<?php 
use WilliamMoura\PriceFii\PriceFii;
use WilliamMoura\PriceFii\Providers\FiisProvider;
 
$priceFii = new PriceFii(
    new FiisProvider()
);
$priceFii->getFiiPrice('mxrf11');
 
```
