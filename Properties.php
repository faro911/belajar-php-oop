<?php
require_once "data/Person.php";

$person = new Person();

$person->name = "Udin";
$person->address = "Jatingaleh Selatan";
$person->country = "Indonesia";

echo "nama : {$person->name}" . PHP_EOL;
echo "alamat : {$person->address}" . PHP_EOL;
echo "negara : {$person->country}" . PHP_EOL;

// $person2 = new Person();

// $person2->name = "Zaenal";
// $person2->address = "Jeporo";
// $person2->country = "Indon Ngulon";

// echo "nama : {$person2->name}" . PHP_EOL;
// echo "alamat : {$person2->address}" . PHP_EOL;
// echo "negara : {$person2->country}" . PHP_EOL;

$person2 = new Person();

$person2->name = "Udin";
$person2->country = "Indonesia";

var_dump($person2);


