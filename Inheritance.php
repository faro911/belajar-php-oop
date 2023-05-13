<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Budi";
$manager-> sayHello("Joko");

$vc = new VicePresdient();
$vc->name = "Eko";
$vc->sayHello("Anwar");