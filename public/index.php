<?php
namespace App;
use App\wcs\Hello;
use HelloWorld\SayHello;

require __DIR__ . '/../vendor/autoload.php';

$test = new Hello();


var_dump($test->talk());

$composerTest = new SayHello();
var_dump($composerTest->world());