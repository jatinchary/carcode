<?php

namespace cartypes;

use abstractclasses\Car;


class HatchBack extends Car {
    public function createCar() {
        echo "Creating a Hatchback car model {$this->model}.\n";
    }
}
?>