<?php

use CarCode\Brand;
use CarCode\Cartypes\HatchBack;


$bmw = new Brand(
    'BMW',
    'BMW motors ltd',
    'BMW'
);

$nexon = new HatchBack(
    'abc',
    'def',
    'ghi',
    'jkl',
    $bmw
);

print_r($nexon);die();