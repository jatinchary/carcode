<?php

namespace cartypes;

use abstractclasses\Car;

class Ev extends Car {
    public function createCar() {
        echo "Creating an Electric car model {$this->model}.\n";
    }
}

?>
