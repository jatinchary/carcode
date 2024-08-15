<?php

namespace CarCode\Cartypes;

use CarCode\AbstractClasses\Car;


class Sedan extends Car {
    public function createCar() {
        echo "Creating a Sedan car model {$this->model}.\n";
    }
}
?>