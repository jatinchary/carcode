<?php

namespace CarCode\Cartypes;

use CarCode\AbstractClasses\Car;


class Ev extends Car {
    public function createCar() {
        echo "Creating an Electric car model {$this->model}.\n";
    }
}

?>
