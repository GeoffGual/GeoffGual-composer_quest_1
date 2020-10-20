<?php
namespace App;
use App\wcs\Hello;

require __DIR__ . '/../vendor/autoload.php';

$test = new Hello();


var_dump($test->talk());