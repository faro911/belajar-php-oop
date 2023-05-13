<?php
require_once "data/Person.php";
const APP_VERSION = "1.0.0";

echo APP_VERSION . PHP_EOL;
//mengakses const di class

echo Person::AUTHOR . PHP_EOL;

$saya = new Person();
echo $saya->info();