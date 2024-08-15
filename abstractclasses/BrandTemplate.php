<?php

namespace CarCode\AbstractClasses;

abstract class BrandTemplate {
    protected string $brandName;
    protected string $manufacturer;
    protected string $symbol;

    public function __construct($brandName, $manufacturer, $symbol) {
        $this->brandName = $brandName;
        $this->manufacturer = $manufacturer;
        $this->symbol = $symbol;
    }

    public function getBrandName() {
        return $this->brandName;
    }

    public function getManufacturer() {
        return $this->manufacturer;
    }

    public function getSymbol() {
        return $this->symbol;
    }

    public function getBrandDetails() {
        return "Brand: {$this->brandName}, Manufacturer: {$this->manufacturer}, Symbol: {$this->symbol}";
    }
}

?>