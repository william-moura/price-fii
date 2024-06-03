<?php
declare(strict_types=1);

namespace WilliamMoura\PriceFii\Models;

class Fii
{
    public function __construct(
        public string $fiiCode = '',
        public float $price = 0.0
    ) {}

    public function setFiiCode(string $fiiCode): self
    {
        $this->fiiCode = $fiiCode;

        return $this;
    }

    public function getFiiCode(): string
    {
        return $this->fiiCode;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
