<?php

require_once "data/Person.php";

$person = new Person();
$person->name = "Eco";
$person->sayHallo(null);
$person2 = new Person();
$person2->name = "Eco";
$person2->sayHallo("cok");