<?php

// // // require_once 'BrandTemplate.php';


// // require_once 'Brand.php';

// // // require_once 'HatchBack.php';
// // // require_once 'Car.php';
// // // use branddetails;

// // //  use branddetails\Brand;

// use brandz\Brand;
// use hatckback\HatchBack;
// include ('./abstractclasses/BrandTemplate.php');
// include ('./Brand.php');
// include ('./cartypes/HatchBack.php');
// include('./abstractclasses/Car.php');
namespace carcode;
use abstractclasses\Car;
use abstractclasses\BrandTemplate;
require_once 'Brand.php';
use cartypes\HatchBack;



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