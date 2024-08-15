<?php

namespace CarCode\Cartypes;

use CarCode\AbstractClasses\Car;

class Sports extends Car {
    public function createCar() {
        echo "Creating a Sports car model {$this->model}.\n";
    }
}
?>