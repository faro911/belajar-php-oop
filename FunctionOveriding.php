<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello("Joko");

$vp = new VicePresdient();
$vp->name = "udin";
$vp->sayHello("penyok");