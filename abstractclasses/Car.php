<?php

// namespace abstractclasses;
// use intface\Payments;
// use carcode\Brand;

namespace CarCode\AbstractClasses;

use CarCode\Intface\Payments;
use CarCode\Brand;




abstract class Car implements Payments {
    protected string $model;
    protected string $price;
    protected string $engine;
    protected string $mileage;
    protected Brand $brand;

    public function __construct($model, $price, $engine, $mileage, Brand $brand) {
        $this->model = $model;
        $this->price = $price;
        $this->engine = $engine;
        $this->mileage = $mileage;
        $this->brand = $brand;
    }

   

    public function getDetails() {
        return "Model: {$this->model}, Price: {$this->price}, Engine: {$this->engine}, Mileage: {$this->mileage}";
    }

    public function getCarDetails() {
        return $this->getDetails() . ", " . $this->brand->getBrandDetails();
    }

    public function fullPayment() {
        return "Full payment made for {$this->model}. Total price: {$this->price}.\n";
    }

    public function downPaymentWithFinance() {
        $downPayment = $this->price * 0.20; 
        $remainingAmount = $this->price - $downPayment;
        return "Down payment made for {$this->model}. Down payment: {$downPayment}, Remaining amount to be financed: {$remainingAmount}.\n";
    }

    public function fullFinance() {
        return "Full finance arranged for {$this->model}. Total price to be financed: {$this->price}.\n";
    }
}
