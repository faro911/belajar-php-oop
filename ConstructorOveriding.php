<?php

require_once "data/Manager2.php";

$manager = new Manager("Eko");
echo "hallo saya $manager->name dan saya $manager->title disini" . PHP_EOL;

$vp = new VicePresdient("JOKO");
echo "hallo saya $vp->name dan saya $vp->title disini" . PHP_EOL;