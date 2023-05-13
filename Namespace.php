<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

//ini cara pemanggilan classs yg di sama didalam 1 file conflict, sehingga penggunaan namespace dibutuhkan

$conflict1 = new \Data\One\Conflict();
$conflict2 = new \Data\Two\Conflict();

// cara akses function dan const didalam helper

echo Helper\APPLICATION . PHP_EOL;
Helper\helpMe();
