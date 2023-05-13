<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

// use Data\One\Conflict;
// use function Helper\helpMe;
// use const Helper\APPLICATION;

// $conflict = new Conflict(); // kalo use tidak bisa dipkai jika 2 function sama di temukan
// $conflict2 = new Data\Two\Conflict();   // tetapi bisa diakali dengan cara namescpace biasa seperti contoh di kiri

// helpMe();
// echo APPLICATION . PHP_EOL;

// PENGGUNAAN ALIAS BISA MEMBANTU PEMANGGILAN JIKALAO TERDAPAT CLASS YANG SAMA. code dibwah copyan diatas namun menggunakan alias
//Sehingga penggunaan lebih efisien

use Data\One\Conflict as Conflict1;
use Data\One\Conflict as Conflict2;
use function Helper\helpMe as help;
use const Helper\APPLICATION as APP;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();

help();
echo APP . PHP_EOL;