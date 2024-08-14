<?php

namespace cartypes;

use abstractclasses\Car;

class Sedan extends Car {
    public function createCar() {
        echo "Creating a Sedan car model {$this->model}.\n";
    }
}
?>